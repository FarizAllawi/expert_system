<?php

Class Konsultasi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model(array('M_Pengunjung','M_Gejala'));
    }
    
    public function index() {

        $this->form_validation->set_rules('nama_depan','Nama Depan','required', array('required'=>'*tidak boleh kosong'));
        $this->form_validation->set_rules('nama_tengah','Nama Tengah','required', array('required'=>'*tidak boleh kosong'));
        $this->form_validation->set_rules('nama_belakang','Nama Belakang','required', array('required'=>'*tidak boleh kosong'));
        $this->form_validation->set_rules('email','Email','required', array('required'=>'*tidak boleh kosong'));
        $this->form_validation->set_rules('alamat','Alamat','required', array('required'=>'*tidak boleh kosong'));

        if ($this->form_validation->run()){
            $kode_pengunjung = $this->M_Pengunjung->create_data_diri();
            redirect('konsultasi/gejala/'.$kode_pengunjung);
        }
        $this->load->view('user/data_diri');
        
    }

    public function gejala($id) {

        $this->form_validation->set_rules('gejala','Gejala','required', array('required'=>'*Pilih salah satu gejala'));
        $this->form_validation->set_rules('gejalaText','Gejala','required', array('required'=>'*tidak boleh kosong'));


        if ($this->form_validation->run())
        {
            $this->M_Pengunjung->save_gejala($id);
            redirect('konsultasi/diagnosa/'.$id);
        }

        $context = [
            'data_gejala' => $this->M_Gejala->get_all_data(),
        ];

        $this->load->view('user/gejala', $context);
    }

    public function diagnosa($id) 
    {
        //sort gejala dipilih dari database
        $dataGejala = array();
        $tampil_data_gejala = $this->db->query("select * from gejala_pengunjung where kd_pengunjung='$id'")->result();
        foreach ($tampil_data_gejala as $gejala)
        {
            array_push($dataGejala, $gejala->kd_gejala);
        }
        //akhir script sort gejala

        //uji coba 
        //sort penyakit dengan gejala yang dipilih
        $list_penyakit_k = [0 => [] , 1 => []];
        foreach ($dataGejala as $list_pyk_k){
            $data_penyakit =$this->db->query("SELECT * FROM aturan where kd_gejala='$list_pyk_k'")->result();
            foreach($data_penyakit as $penyakit) {
                array_push($list_penyakit_k[0], $penyakit->kd_gejala);
                array_push($list_penyakit_k[1], $penyakit->kd_penyakit);
            }   
        }

        //ambil penyakit aja
        foreach ($list_penyakit_k[1] as $penyakit){
            $query = $this->db->query("SELECT * from penyakit_pengunjung where kd_penyakit='$penyakit'");
            if ($query->num_rows() == 0){
                $data = [
                    'kd_pengunjung' => $id,
                    'kd_penyakit' => $penyakit,
                    'jml_gejala' => 1
                ];
                $this->db->insert('penyakit_pengunjung', $data);
            }
            else{
                $this->db->query("UPDATE penyakit_pengunjung set jml_gejala=jml_gejala+1 where kd_penyakit='$penyakit'");
            };
        };


        //sort penyakit dengan jumlah gejalanya yang diderita user
        $list_penyakit_jml_gejala = [0 => [] , 1 => []];
        $list_penyakit_gejala = $this->db->query("SELECT * FROM penyakit_pengunjung where kd_pengunjung='$id' order by kd_penyakit ASC")->result();
        foreach($list_penyakit_gejala as $penyakit_gejala) {
            array_push($list_penyakit_jml_gejala[0], $penyakit_gejala->kd_penyakit);
            array_push($list_penyakit_jml_gejala[1], $penyakit_gejala->jml_gejala);
        }


    //sort jumlah penyakit dan gejalanya yang didatabase
        $list_penyakit_kk = [];
        $index = 0;
        foreach ($list_penyakit_k[1] as $list){
            $query_penyakit_kk = $this->db->query("SELECT * FROM aturan where kd_penyakit='$list'");
            $jumlah_gejala = $query_penyakit_kk->num_rows();

            foreach( $query_penyakit_kk->result() as $penyakit) {
                $list_penyakit_kk[$index][0] = $penyakit->kd_penyakit;
            }
            $list_penyakit_kk[$index][1] = $jumlah_gejala;
            $hasil = floor($list_penyakit_kk[$index][1] / 2);
            $list_penyakit_kk[$index][2] = $hasil;
            $index++;
        };


        //bandingkan jumlah yang ad di table aturan dengan jumlah gejala yang terpilih
        $list_penyakit_penuh_kriteria = array ();
        foreach ($list_penyakit_jml_gejala as $jumlah_gejala){
            foreach ($list_penyakit_kk as $list_penyakit){
                if ($jumlah_gejala[0]==$list_penyakit[0]){
                    if ($jumlah_gejala[1]>=$list_penyakit[2]){
                        $list_penyakit_penuh_kriteria[]=$jumlah_gejala[1];
                    };
                };
            };
        };
        
        $list_penyakit_tersaring = array ();
        if (count($list_penyakit_penuh_kriteria)==0){
            echo "<h3>Tidak Bisa Melakukan Diagnosa Penyakit, Gejala Yang Anda Masukkan Kurang Spesifik</h3>";
            $this->db->query("DELETE FROM penyakit_pengunjung where kd_pengunjung='$id'");
            $this->db->query("DELETE FROM pengunjung where kd_pengunjung='$id'");
            $this->db->query("DELETE FROM gejala_pengunjung where kd_pengunjung='$id'");
        }
        else{
            $index = 0;
            $gejala_user=array();
            $data_gejala = array();
            foreach ($dataGejala as $data) {
                $gejala = $this->db->query("SELECT * FROM gejala WHERE kd_gejala='$data'")->row();
                $data_gejala[$index] =  $gejala->nm_gejala;
                //simpan data gejala dalam array
                $gejala_user[$gejala->kd_gejala]=$gejala->nm_gejala;
                $index++;
            }

        //Data Penyakit
        $penyakit=array(); 
        $gebot=array();
        $p=0;
        $r_penyakit = $this->db->query("SELECT kd_penyakit, np_penyakit FROM penyakit")->result();
        foreach($r_penyakit as $data) {
            $penyakit[$p][0]=$data->kd_penyakit;
            $penyakit[$p][1]=$data->np_penyakit;
            $q=0;
            //Data Gejala Bobot
            foreach ($dataGejala as $gejala) {
                $r_gejala2 = $this->db->query("SELECT aturan.nl_prob FROM aturan WHERE aturan.kd_penyakit='$data->kd_penyakit' AND aturan.kd_gejala='$gejala'");
                $bobot_gejala = $r_gejala2->row();
                if($r_gejala2->num_rows()>=1){
                    $gebot[$p][$q][0]=$data->kd_penyakit;
                    $gebot[$p][$q][1]=$gejala;
                    $gebot[$p][$q][2]=$bobot_gejala->nl_prob;
                }else{
                    $gebot[$p][$q][0]=$data->kd_penyakit;
                    $gebot[$p][$q][1]=$gejala;
                    $gebot[$p][$q][2]=0;
                }
                $q++;
            }
            $p++;
        }

        // echo "<pre>";
        // die(var_dump($list_penyakit_penuh_kriteria));
        
        //hitung gejala bobot
        $atas=array();
        $sum_bawah=array();
        $bawah=array();
        $hit_gebot=array();
        $hit_total=array();
        $hit_persen=array();
        $hit_max=array();
        for ($a=0; $a <= count($penyakit)-1 ; $a++) { 
            for ($b=0; $b <= count($dataGejala)-1 ; $b++) { 
                //hitung atas
                $atas[$a][$b]=$gebot[$a][$b][2]*$penyakit[$a][1];
                //hitung bawah
                for ($c=0; $c <=count($penyakit)-1 ; $c++) { 
                    $sum_bawah[$a][$b][$c]=$gebot[$c][$b][2]*$penyakit[$c][1];
                }
                $bawah[$a][$b]=array_sum($sum_bawah[$a][$b]);
                //hitung atas/bawah
                $hit_gebot[$a][$b]=$atas[$a][$b]/$bawah[$a][$b];
            }
            //sum bobot
            $hit_total[$a]=round(array_sum($hit_gebot[$a]), 4);
            //persentase
            $hit_persen[$a][0]=$penyakit[$a][0];
            $hit_persen[$a][1]=round($hit_total[$a]*100/count($dataGejala), 0);
            
        }

        foreach ($hit_persen as $key) {
            //simpan hasil persentase ke data sementara
            $yo=implode(',', $key);
            list($sakit, $persen)=explode(',', $yo);
            $data = ['kd_pengunjung' => $id, 'kd_penyakit' => $sakit , 'persen' => $persen];
            $this->db->insert('diagnosa', $data);
        }

        //Hasil konsultasi
        //$q_hasilkonsul = "SELECT tbldiagnosa.kd_penyakit, tblpenyakit.nm_penyakit, tbldiagnosa.persen FROM tbldiagnosa INNER JOIN tblpenyakit ON tbldiagnosa.kd_penyakit=tblpenyakit.kd_penyakit WHERE tbldiagnosa.persen=(SELECT MAX(tbldiagnosa.persen) AS persen FROM tbldiagnosa WHERE tbldiagnosa.id_pengunjung='$user') AND tbldiagnosa.id_pengunjung='$user'";
        $data_penyakit = [];
        $q_hasilkonsul = "select diagnosa.kd_pengunjung, penyakit.kd_penyakit, penyakit.nm_penyakit, diagnosa.persen from diagnosa, penyakit where diagnosa.kd_penyakit=penyakit.kd_penyakit and diagnosa.kd_pengunjung='$id'";
        $r_hasilkonsul = $this->db->query($q_hasilkonsul)->row();
        // echo "<br/><strong>Persentasi Penyakit : </strong><br/>";//.$ht_konsultasi['persen']."% Menderita Penyakit ".$ht_konsultasi['nm_penyakit'];

        if ($r_hasilkonsul->persen != 0.00) {
            $data_penyakit[0] =  $r_hasilkonsul->persen."% Menderita Penyakit ".$r_hasilkonsul->nm_penyakit;
        }

        $q_max  = "SELECT diagnosa.kd_penyakit, penyakit.nm_penyakit, penyakit.pengobatan, diagnosa.persen FROM diagnosa INNER JOIN penyakit ON diagnosa.kd_penyakit=penyakit.kd_penyakit WHERE diagnosa.persen=(SELECT MAX(diagnosa.persen) AS persen FROM diagnosa WHERE diagnosa.kd_pengunjung='$id') AND diagnosa.kd_pengunjung='$id'";
        $result  = $this->db->query($q_max)->row();
        $data_penyakit[1] = "kemungkinan yang terbesar kamu terkena penyakit <b>$result->nm_penyakit</b> dengan persentase kemungkinan <b>$result->persen %.</b>";

        $data_pengobatan = [];
        $index = 0;
        $h_obat = explode(",", $result->pengobatan);
        foreach ($h_obat as $obat){
            $data_pengobatan[$index] = $obat;
            $index++;
        }
        
        //Simpan Data Konsultasi
        $gejala_user=implode(',', $gejala_user);
        $gejala_user =str_replace(',', ', ', $gejala_user);
        $q_u_gejala = "UPDATE pengunjung SET gejala='$gejala_user', kd_penyakit='$result->kd_penyakit', tgl_diagnosa='".date('Y-m-d H:i:s')."', nl_bayes='$result->persen' WHERE kd_pengunjung='$id'";
        $this->db->query($q_u_gejala);
        
        //hapus data sementara
        $this->db->delete('diagnosa', array('kd_pengunjung'=>$id));
        $this->db->delete('gejala_pengunjung', array('kd_pengunjung'=>$id));
        $this->db->delete('penyakit_pengunjung', array('kd_pengunjung'=>$id));

        //penutup else 
        };   
        $context = [
            'data_diri' => $this->M_Pengunjung->get_data($id),
            'data_gejala' => $data_gejala,
            'data_penyakit' => $data_penyakit,
            'data_pengobatan' => $data_pengobatan
        ]; 


        $this->load->view('user/diagnosa', $context);
    }
}
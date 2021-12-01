<?php

use function PHPSTORM_META\map;

Class M_Pengunjung extends CI_Model {

    public function get_data($id)
    {
        return $this->db->get('pengunjung', array('kd_pengunjung'=> $id))->row();
    }

    public function get_gejala($id)
    {
        $sql = "SELECT gj.kd_gejala FROM gejala_pengunjung as gj WHERE gj.kd_pengunjung='$id'";
        return  $this->db->query($sql)->result();
    }


    public function list_penyakit($data_gejala) 
    {
        $penyakit = [
            'kd_gejala' => [],
            'kd_penyakit' => []
        ];
        foreach($data_gejala as $data) {
            $sql = "SELECT a.kd_gejala, a.kd_penyakit FROM aturan as a WHERE a.kd_gejala = $data->kd_gejala";
            $gejala = $this->db->query($sql)->row();
            array_push($penyakit['kd_gejala'], $gejala->kd_gejala);
            array_push($penyakit['kd_penyakit'], $gejala->kd_penyakit);
        }
        return $penyakit;
    }

    public function add_penyakit_pengunjung($id, $list_penyakit)
    {
        $temp = null;
        $penyakit_pengunjung = ['kd_penyakit' => [], 'jml_gejala' => []];
        foreach($list_penyakit as $penyakit)
        {
            if ($temp != $penyakit) {
                $data = [
                    'kd_pengunjung' => $id,
                    'kd_penyakit' => $penyakit,
                    'jml_gejala' => 1
                ];
                $this->db->insert('penyakit_pengunjung', $data);
                array_push($penyakit_pengunjung['kd_penyakit'], $penyakit);
                array_push($penyakit_pengunjung['jml_gejala'], 1);

            }
            else {
                $sql = "UPDATE penyakit_pengunjung set jml_gejala=jml_gejala+1 where kd_penyakit=$penyakit and kd_pengunjung = $id";
                $this->db->query($sql);
                $index = array_search($penyakit , $penyakit_pengunjung['kd_penyakit']);
                $penyakit_pengunjung['jml_gejala'][$index] = $penyakit_pengunjung['jml_gejala'][$index] + 1;
            }
            $temp = $penyakit;
        }
        return $penyakit_pengunjung;
    }

    public function get_data_rules($list_penyakit) {
        $rules_data = ['kd_penyakit'=>[], 'hasil' => []];
        foreach ($list_penyakit as $penyakit) {
            $sql = "SELECT * FROM aturan where kd_penyakit=$penyakit";
            $jumlah_gejala = $this->db->query($sql)->num_rows();
            $hasil = floor($jumlah_gejala / 2);
            array_push($rules_data['kd_penyakit'], $penyakit);
            array_push($rules_data['hasil'], $hasil);
        }
        return $rules_data;
    }

    public function compare_data($list_penyakit_jml_gejala , $list_penyakit_kk)
    {
        $list_penyakit_penuh_kriteria = ['jumlah_gejala' => $list_penyakit_jml_gejala, 'penyakit_kk' => $list_penyakit_kk];
        // foreach ($list_penyakit_jml_gejala as $h_list_penyakit_jml_gejala){
        //     foreach ($list_penyakit_kk as $h_list_penyakit_kk){
        //         if ($h_list_penyakit_jml_gejala[0]==$h_list_penyakit_kk[0]){
        //             if ($h_list_penyakit_jml_gejala[1]>=$h_list_penyakit_kk[2]){
        //                 $list_penyakit_penuh_kriteria[]=$h_list_penyakit_jml_gejala[1];
        //             }
        //         }
        //     }
        // }
        return $list_penyakit_penuh_kriteria;
    }

    public function create_data_diri()
    {
        $nama_lengkap = $this->input->post('nama_depan').' '.$this->input->post('nama_tengah').' '.$this->input->post('nama_belakang');
        $data = [
            'kd_pengunjung' => $this->count_data_pengunjung()+1,
            'nm_pengunjung' => $nama_lengkap,
            'email' => $this->input->post('email'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->db->insert('pengunjung', $data);
        return $data['kd_pengunjung'];
    }

    public function count_data_pengunjung() 
    {
        $this->db->select('MAX(kd_pengunjung) as max_id');
        return $this->db->get('pengunjung')->row()->max_id;
    }

    public function save_gejala($id) 
    {
        $gejalaText = $this->input->post('gejalaText');
        $data_gejala = explode(',', $this->input->post('gejala'));
        $data = [
            'gejala' => $gejalaText
        ];

        $this->db->update('pengunjung', $data, array('kd_pengunjung'=>$id));

        foreach($data_gejala as $gejala)
        {
            if (!empty($gejala))
            {
                $data = [
                    'kd_pengunjung' => $id,
                    'kd_gejala' => $gejala
                ];
    
                $this->db->insert('gejala_pengunjung', $data);
            }
        }

    }
}
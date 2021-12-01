<?php

class M_Rules extends CI_Model {

    public function count_data_rules() 
    {
        $this->db->select('MAX(kd_aturan) as max_id');
        return $this->db->get('aturan')->row()->max_id;
    }

    public function get_rules($id=NULL, $limit=NULL , $offset=NULL)
    {
        if (!empty($id)){
            $sql = "SELECT aturan.*, penyakit.nm_penyakit, gejala.nm_gejala FROM aturan , penyakit , gejala WHERE aturan.kd_aturan='$id' AND aturan.kd_penyakit = penyakit.kd_penyakit AND aturan.kd_gejala = gejala.kd_gejala";
            return  $this->db->query($sql)->row();
        } 
        else {
            $this->db->select('aturan.*, penyakit.nm_penyakit, gejala.nm_gejala');
            $this->db->from('aturan , penyakit , gejala');
            $this->db->where('aturan.kd_penyakit = penyakit.kd_penyakit AND aturan.kd_gejala = gejala.kd_gejala');
            $this->db->order_by('aturan.kd_aturan','ASC');
            $this->db->limit($limit, $offset);
            return $this->db->get('')->result();
        }
    }

    public function delete_data($id) 
    {
        return $this->db->delete('aturan', array('kd_aturan' => $id));
    }

    public function actions($id = NULL)
    {
        if (!isset($id)) {
            $data = [
                'kd_aturan' => $this->input->post('kd_aturan'),
                'kd_penyakit' => $this->input->post('penyakit'),
                'kd_gejala' => $this->input->post('gejala'),
                'nl_prob' => $this->input->post('probabilitas'),
            ];
            return $this->db->insert('aturan', $data);
        } else {
            $data = [
                'kd_penyakit' => $this->input->post('penyakit'),
                'kd_gejala' => $this->input->post('gejala'),
                'nl_prob' => $this->input->post('probabilitas'),
            ];
            $this->db->update('aturan',$data ,array('kd_aturan'=>$id));
        }
    }
}
<?php

Class M_Gejala extends CI_Model {

    public function count_data_gejala() 
    {
        $this->db->select('MAX(kd_gejala) as max_id');
        return $this->db->get('gejala')->row()->max_id;
    }

    public function get_gejala($id=NULL, $limit=NULL , $offset=NULL)
    {
        if (!empty($id)){
            $sql = "SELECT * FROM gejala WHERE gejala.kd_gejala='$id'";
            return  $this->db->query($sql)->row();
        } 
        else {
            $this->db->select('*');
            $this->db->from('gejala');
            $this->db->order_by('gejala.kd_gejala','ASC');
            $this->db->limit($limit, $offset);
            return $this->db->get('')->result();
        }
    }

    public function get_all_data() 
    {
        $this->db->select('*');
        $this->db->from('gejala');
        $this->db->order_by('gejala.nm_gejala','ASC');
        return $this->db->get('')->result();
    }
    
    public function actions($id = NULL) 
    {
        if (!isset($id)) {
            $data = [
                'kd_gejala' => $this->input->post('kd_gejala'),
                'nm_gejala' => $this->input->post('nm_gejala'),
            ];
            return $this->db->insert('gejala', $data);
        } else {
            $data = [
                'nm_gejala' => $this->input->post('nm_gejala')
            ];
            $this->db->update('gejala',$data ,array('kd_gejala'=>$id));
        }
    }

    public function delete_data($id = NULL)
    {
        return $this->db->delete('gejala', array('kd_gejala' => $id));
    }
}
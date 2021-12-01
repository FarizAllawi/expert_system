<?php 

class M_Penyakit extends CI_Model{

    public function get_penyakit($id=NULL, $limit=NULL , $offset=NULL)
    {
        if (!empty($id)){
            $sql = "SELECT * FROM penyakit WHERE penyakit.kd_penyakit='$id'";
            return  $this->db->query($sql)->row();
        } 
        else {
            $this->db->select('*');
            $this->db->from('penyakit');
            $this->db->order_by('penyakit.kd_penyakit','ASC');
            $this->db->limit($limit, $offset);
            return $this->db->get('')->result();
        }
    }

    public function actions($id = NULL) 
    {
        if (!isset($id)) {
            $data = [
                'kd_penyakit' => $this->input->post('kd_penyakit'),
                'nm_penyakit' => $this->input->post('nama_penyakit'),
                'pengobatan' => $this->input->post('pengobatan')
            ];
            return $this->db->insert('penyakit', $data);
        } else {
            $data = [
                'nm_penyakit' => $this->input->post('nama_penyakit'),
                'pengobatan' => $this->input->post('pengobatan')
            ];
            $this->db->update('penyakit',$data ,array('kd_penyakit'=>$id));
        }
    }

    public function delete_data($id) 
    {
        return $this->db->delete('penyakit', array('kd_penyakit' => $id));
    }

    public function count_data_penyakit() 
    {
        $this->db->select('MAX(kd_penyakit) as max_id');
        return $this->db->get('penyakit')->row()->max_id;
    }
}
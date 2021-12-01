<?php

class Admin extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library(array('pagination','form_validation'));
        $this->load->model(array('M_Penyakit', 'M_Gejala', 'M_Rules'));
    }

    public function index() 
    {
        $context = [
            'title' => 'Dashboard'
        ]; 
        $this->template->show('admin/dashboard', $context);
    }


    /**
     * PENYAKIT
     */
    public function penyakit() 
    {

        $config['base_url']         = 'http://localhost/expert_system/admin/penyakit/';
        $config['total_rows']       = $this->M_Penyakit->count_data_penyakit();
        $config['per_page']         = 15;
        $config['full_tag_open']    = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close']   = '</ul>';
        $config['next_link']        = "<i class='fas fa-angle-right'></i>
                                        <span class='sr-only'>Next</span>";
        $config['prev_link']        = "<i class='fas fa-angle-left'></i>
                                        <span class='sr-only'>Previous</span>";
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['full_tag_open']    = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = "<li class='page-item active'><a href='#' class='page-link'>";
        $config['cur_tag_close']    = '</a></li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tag_close']   = '</li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close']  = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $context = [
            'title' => 'Data Penyakit',
            'data_penyakit' => $this->M_Penyakit->get_penyakit(NULL , $config['per_page'] , $this->uri->segment(3))
        ]; 
        $this->template->show('admin/penyakit/index', $context);
    }

    public function create_penyakit() 
    {
        $context = [
            'title' => 'Tambah Penyakit',
            'kd_penyakit' =>  $this->M_Penyakit->count_data_penyakit()+1,
        ];

        $this->form_validation->set_rules('kd_penyakit','ID Penyakit','required', array('required'=>'ID Penyakit tidak boleh kosong'));
        $this->form_validation->set_rules('nama_penyakit','Nama Penyakit','required', array('required'=>'Nama Penyakit tidak boleh kosong'));
        $this->form_validation->set_rules('pengobatan','Pengobatan','required', array('required'=>'Pengobatan tidak boleh kosong'));
        
        if ($this->form_validation->run()) {
           $this->M_Penyakit->actions();
           redirect('admin/penyakit');
        }
        $this->template->show('admin/penyakit/actions' , $context);
    }

    public function update_penyakit() 
    {
        $id = $this->uri->segment(3);
        $context = [
            'title' => 'Update Penyakit',
            'data_penyakit' => $this->M_Penyakit->get_penyakit($id),
        ];
        $this->form_validation->set_rules('kd_penyakit','ID Penyakit','required', array('required'=>'ID Penyakit tidak boleh kosong'));
        $this->form_validation->set_rules('nama_penyakit','Nama Penyakit','required', array('required'=>'Nama Penyakit tidak boleh kosong'));
        $this->form_validation->set_rules('pengobatan','Pengobatan','required', array('required'=>'Pengobatan tidak boleh kosong'));

        if ($this->form_validation->run()){

            $this->M_Penyakit->actions($id);
            redirect('admin/penyakit');
        }
        $this->template->show('admin/penyakit/actions' , $context);
    }

    public function delete_penyakit() 
    {
        $id = $this->uri->segment(3);
        $this->M_Penyakit->delete_data($id);
        redirect('admin/penyakit');
    }

    /**
     * GEJALA
     */
    public function gejala() 
    {
        $config['base_url']         = 'http://localhost/expert_system/admin/gejala/';
        $config['total_rows']       = $this->M_Gejala->count_data_gejala();
        $config['per_page']         = 15;
        $config['full_tag_open']    = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close']   = '</ul>';
        $config['next_link']        = "<i class='fas fa-angle-right'></i>
                                        <span class='sr-only'>Next</span>";
        $config['prev_link']        = "<i class='fas fa-angle-left'></i>
                                        <span class='sr-only'>Previous</span>";
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['full_tag_open']    = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = "<li class='page-item active'><a href='#' class='page-link'>";
        $config['cur_tag_close']    = '</a></li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tag_close']   = '</li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close']  = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $context = [
            'title' => 'Data Gejala',
            'data_gejala' => $this->M_Gejala->get_gejala(NULL , $config['per_page'] , $this->uri->segment(3))
        ]; 
        $this->template->show('admin/gejala/index', $context);
    }

    public function create_gejala()
    {
        $context = [
            'title' => 'Tambah Gejala',
            'kd_gejala' =>  $this->M_Gejala->count_data_gejala()+1,
        ];

        $this->form_validation->set_rules('kd_gejala','ID Gejala','required', array('required'=>'ID Gejala tidak boleh kosong'));
        $this->form_validation->set_rules('nm_gejala','Nama Gejala','required', array('required'=>'Nama Gejala tidak boleh kosong'));
        
        if ($this->form_validation->run() == TRUE)
        {
            $this->M_Gejala->actions();
            redirect('admin/gejala');
        } 
        $this->template->show('admin/gejala/actions' , $context);
    }

    public function update_gejala()
    {
        $id = $this->uri->segment(3);
        $context = [
            'title' => 'Update Gejala',
            'data_gejala' => $this->M_Gejala->get_gejala($id),
        ];

        $this->form_validation->set_rules('kd_gejala','ID Gejala','required', array('required'=>'ID Gejala tidak boleh kosong'));
        $this->form_validation->set_rules('nm_gejala','Nama Gejala','required', array('required'=>'Nama Gejala tidak boleh kosong'));
        
        if ($this->form_validation->run() == TRUE)
        {
            $this->M_Gejala->actions($id);
            redirect('admin/gejala');
        } 
        $this->template->show('admin/gejala/actions' , $context);
    }

    public function delete_gejala()
    {
        $id = $this->uri->segment(3);
        $this->M_Gejala->delete_data($id);
        redirect('admin/gejala');
    }

    /**
     * Basis Aturan
     */
    public function rules()
    {
        $config['base_url']         = 'http://localhost/expert_system/admin/rules/';
        $config['total_rows']       = $this->M_Rules->count_data_rules();
        $config['per_page']         = 15;
        $config['full_tag_open']    = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close']   = '</ul>';
        $config['next_link']        = "<i class='fas fa-angle-right'></i>
                                        <span class='sr-only'>Next</span>";
        $config['prev_link']        = "<i class='fas fa-angle-left'></i>
                                        <span class='sr-only'>Previous</span>";
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['full_tag_open']    = "<ul class='pagination justify-content-center'>";
        $config['full_tag_close']   = '</ul>';
        $config['num_tag_open']     = '<li class="page-item">';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = "<li class='page-item active'><a href='#' class='page-link'>";
        $config['cur_tag_close']    = '</a></li>';
        $config['prev_tag_open']    = '<li class="page-item">';
        $config['prev_tag_close']   = '</li>';
        $config['next_tag_open']    = '<li class="page-item">';
        $config['next_tag_close']   = '</li>';
        $config['last_tag_open']    = '<li class="page-item">';
        $config['last_tag_close']   = '</li>';
        $config['first_tag_open']   = '<li class="page-item">';
        $config['first_tag_close']  = '</li>';
        $config['attributes'] = array('class' => 'page-link');

        $this->pagination->initialize($config);

        $context = [
            'title' => 'Data Aturan',
            'data_rules' => $this->M_Rules->get_rules(NULL , $config['per_page'] , $this->uri->segment(3))
        ]; 
        $this->template->show('admin/rules/index', $context);
    }

    public function create_rules()
    {
        $context = [
            'title' => 'Tambah Aturan',
            'kd_aturan' =>  $this->M_Rules->count_data_rules()+1,
            'data_penyakit' => $this->M_Penyakit->get_penyakit(),
            'data_gejala' => $this->M_Gejala->get_gejala()
        ];

        $this->form_validation->set_rules('kd_aturan','ID Aturan','required', array('required'=>'ID Aturan tidak boleh kosong'));
        $this->form_validation->set_rules('penyakit','Nama Aturan','required', array('required'=>'Nama Penyakit tidak boleh kosong'));
        $this->form_validation->set_rules('gejala','Nama Gejala','required', array('required'=>'Nama Gejala tidak boleh kosong'));
        $this->form_validation->set_rules('probabilitas','Nilai Probabilitas','required', array('required'=>'Nilai Probabilitas tidak boleh kosong'));

        
        if ($this->form_validation->run() == TRUE)
        {
            $this->M_Rules->actions();
            redirect('admin/rules');
        } 
        $this->template->show('admin/rules/actions' , $context); 
    }

    public function update_rules()
    {
        $id = $this->uri->segment(3);
        $context = [
            'title' => 'Tambah Aturan',
            'kd_aturan' =>  $this->M_Rules->count_data_rules()+1,
            'data_rules' => $this->M_Rules->get_rules($id),
            'data_penyakit' => $this->M_Penyakit->get_penyakit(),
            'data_gejala' => $this->M_Gejala->get_gejala()
        ];

        $this->form_validation->set_rules('kd_aturan','ID Aturan','required', array('required'=>'ID Aturan tidak boleh kosong'));
        $this->form_validation->set_rules('penyakit','Nama Aturan','required', array('required'=>'Nama Penyakit tidak boleh kosong'));
        $this->form_validation->set_rules('gejala','Nama Gejala','required', array('required'=>'Nama Gejala tidak boleh kosong'));
        $this->form_validation->set_rules('probabilitas','Nilai Probabilitas','required', array('required'=>'Nilai Probabilitas tidak boleh kosong'));

        
        if ($this->form_validation->run() == TRUE)
        {
            $this->M_Rules->actions();
            redirect('admin/rules');
        } 
        $this->template->show('admin/rules/actions' , $context); 
    }

    public function delete_rules()
    {
        $id = $this->uri->segment(3);
        $this->M_Rules->delete_data($id);
        redirect('admin/rules');
    }
}
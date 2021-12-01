<?php 

class Template {
    protected $_CI;

    function __construct() {
        $this->_CI =& get_instance();
    }

    function show($template , $data=null) {
        $data['content'] = $this->_CI->load->view($template ,$data , true);
        $this->_CI->load->view('admin/layout.php',$data);
    }
}
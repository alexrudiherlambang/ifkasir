<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Dashboard
 */
class Home extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
        
        $is_login = $this->session->userdata('is_login');

        if (!$is_login) {
            redirect(base_url('login'));
            return;
        }
    }

    public function index()
    {
        $nama = $this->session->userdata('nama');

        $data['page']               = 'pages/home/index';
        $data['title']              = 'IFKasir - Dashboard';
        $data['breadcrumb_title']   = "Hallo $nama 😊";
        $data['breadcrumb_path']    = 'Home / Dashboard';
        
        $this->view($data);
    }
}

/* End of file Home.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('auth/login');
    }

    public function login()
    {
        $data['title_page'] = "Log In";
        $this->load->view('_partials/auth/header', $data);
        $this->load->view('auth/login', $data);
        $this->load->view('_partials/auth/footer', $data);
    }
}

/* End of file Auth.php and path \application\controllers\Auth.php */

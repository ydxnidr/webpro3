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
        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim',
            [
                'required' => 'Username harus diisi!'
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim',
            [
                'required' => 'Password harus diisi!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['title_page'] = "Log In";
            $this->load->view('_partials/auth/header', $data);
            $this->load->view('auth/login', $data);
            $this->load->view('_partials/auth/footer', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = $this->input->post('password', true);
        $user = $this->user_model->cek_login(['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = ['username' => $user['username'], 'role_id' => $user['role_id']];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin/dashboard');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('pesan', 'Password salah!');
                    redirect('auth/login');
                }
            } else {
                $this->session->set_flashdata('pesan', 'Username belum aktif!');
                redirect('auth/login');
            }
        } else {
            $this->session->set_flashdata('pesan', 'Username tidak terdaftar!');
            redirect('auth/login');
        }
    }
}

/* End of file Auth.php and path \application\controllers\Auth.php */

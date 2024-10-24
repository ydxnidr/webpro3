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
        redirect('auth/masuk');
    }

    public function masuk()
    {
        if ($this->session->userdata('username')) {
            redirect('admin/dashboard');
        }

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
            $data['title_page'] = "Masuk";
            $this->load->view('_partials/auth/header', $data);
            $this->load->view('auth/masuk', $data);
            $this->load->view('_partials/auth/footer', $data);
        } else {
            $this->_masuk();
        }
    }

    private function _masuk()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = $this->input->post('password', true);
        $user = $this->user_model->cek_masuk(['username' => $username])->row_array();

        if ($user) {
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = ['username' => $user['username'], 'roleID' => $user['roleID']];
                    $this->session->set_userdata($data);
                    if ($user['roleID'] == 1) {
                        redirect('admin/dashboard');
                    } else {
                        redirect('home');
                    }
                } else {
                    $this->session->set_flashdata('pesan', 'Password salah!');
                    redirect('auth/masuk');
                }
            } else {
                $this->session->set_flashdata('pesan', 'Username belum aktif!');
                redirect('auth/masuk');
            }
        } else {
            $this->session->set_flashdata('pesan', 'Username tidak terdaftar!');
            redirect('auth/masuk');
        }
    }

    public function daftar()
    {
        if ($this->session->userdata('username')) {
            redirect('admin/dashboard');
        }

        $this->form_validation->set_rules(
            'username',
            'Username',
            'required|trim|is_unique[users.username]',
            [
                'required' => 'Username harus diisi',
                'is_unique' => 'Username sudah digunakan!'
            ]
        );

        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[users.email]',
            [
                'valid_email' => 'Email tidak valid!',
                'required' => 'Email harus diisi',
                'is_unique' => 'Email sudah digunakan!'
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[8]|matches[ulangi_password]',
            [
                'required' => 'Password harus diisi',
                'min_length' => 'Password terlalu pendek!',
                'matches' => 'Password tidak cocok!'
            ]
        );

        $this->form_validation->set_rules(
            'ulangi_password',
            'Ulangi Password',
            'required|trim|matches[password]',
            [
                'required' => 'Ulangi Password harus diisi',
                'matches' => 'Password tidak cocok!'
            ]
        );

        if ($this->form_validation->run() == FALSE) {
            $data['title_page'] = "Daftar";
            $this->load->view('_partials/auth/header', $data);
            $this->load->view('auth/daftar', $data);
            $this->load->view('_partials/auth/footer', $data);
        } else {
            $username = $this->input->post('username', true);
            $data = [
                'username' => htmlspecialchars($username),
                'profile_name' => 'User_' . ($this->db->count_all_results('users') + 1),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'roleID' => 2,
                'is_active' => 0
            ];
            $this->data_model->insert_data($data, 'users');
            $this->session->set_flashdata('pesan', 'Akun Anda telah dibuat, tunggu admin mengaktifasi!');
            redirect('auth/masuk');
        }
    }
}

/* End of file Auth.php and path \application\controllers\Auth.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = "Dashboard";
            $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
            if ($data['pegawai']['level'] == 1) {
                $this->load->view('Admin/dashboard', $data);
            } else if ($data['pegawai']['level'] == 2) {
                $this->load->view('Karyawan/dashboard', $data);
            }
            else {
                $this->load->view('templates/auth_header');
                $this->load->view('auth/login');
                $this->load->view('templates/auth_footer');
            }
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('pegawai', ['email' => $email])->row_array();
        if ($user) {
            //user ada
            if ($user['is_aktif'] == 1) {
                //user aktif
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'level' => $user['level'],
                        'is_aktif' => $user['is_aktif'],
                        'id_pegawai' => $user['id_pegawai']
                    ];
                    $this->session->set_userdata($data);
                    redirect('beranda');
                } else {
                    //Password salah
                    $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Password salah!</center></div></div>');
                    redirect('auth');
                }
            } else {
                //user tidak aktif
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Username tidak aktif!</center></div></div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Username tidak terdaftar!</center></div></div>');
            redirect('auth');
        }
    }

    public function lupa_akun()
    {
        $this->load->view('templates/auth_header');
        $this->load->view('auth/lupa_akun');
        $this->load->view('templates/auth_footer');
    }

    public function cek_akun()
    {
        $email = $this->input->post('email');
        if ($email == null) {
            redirect('auth/lupa_akun');
        } else {
            $cek = $this->db->query("SELECT email FROM pegawai WHERE email = '$email'")->row()->email;
            if ($email == $cek) {
                $data['email'] = $email;
                $this->load->view('templates/auth_header');
                $this->load->view('auth/nik_akun', $data);
                $this->load->view('templates/auth_footer');
            } else {
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Email tidak terdaftar!</center></div></div>');
                redirect('auth/lupa_akun');
            }
        }
    }

    public function ganti_akun()
    {
        $nik_pegawai = $this->input->post('nik_pegawai');
        $email = $this->input->post('email');
        if ($nik_pegawai == null) {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>NIK yang kamu tidak sesuai!</center></div></div>');
            redirect('auth/lupa_akun');
        } else {
            $data['email'] = $email;
            $cek = $this->db->query("SELECT email FROM pegawai WHERE nik_pegawai = '$nik_pegawai'")->row()->email;
            if ($email == $cek) {
                $this->load->view('templates/auth_header');
                $this->load->view('auth/pass_akun', $data);
                $this->load->view('templates/auth_footer');
            } else {
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>NIK yang kamu masukan salah!</center></div></div>');
                redirect('auth/ganti_akun');
            }
        }
    }

    public function ganti_pass()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $k_password = $this->input->post('k_password');

        $id_pegawai = $this->db->query("SELECT id_pegawai FROM pegawai WHERE email = '$email'")->row()->id_pegawai;
        if ($password == $k_password) {
            $data = array(
                'password' => password_hash($password, PASSWORD_DEFAULT)
            );
            $where = array(
                'id_pegawai' => $id_pegawai
            );
            $this->db->where($where);
            $this->db->update('pegawai', $data);
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Password Berhasil di ganti!</center></div></div>');
            redirect('');
        } else {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Password Tidak Sama!</center></div></div>');
            $data['email'] = $email;
            $this->load->view('templates/auth_header');
            $this->load->view('auth/pass_akun', $data);
            $this->load->view('templates/auth_footer');
        }
    }
}

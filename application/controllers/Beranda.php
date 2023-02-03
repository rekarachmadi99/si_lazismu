<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = "Dashboard";
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/dashboard', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/dashboard', $data);
        } else {
            redirect('auth');
        }
    }


    public function Pemasukan()
    {
        $data['title'] = "Pemasukan";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            if ($this->form_validation->run() == false) {
                $this->load->view('Admin/Pemasukan/Pemasukan', $data);
            } else {
                echo "sukses";
            }
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pemasukan/Pemasukan', $data);
        } else {
            redirect('auth');
        }
    }

    public function Pengeluaran()
    {
        $data['title'] = "Pengeluaran";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pengeluaran/Pengeluaran', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pengeluaran/Pengeluaran', $data);
        } else {
            redirect('auth');
        }
    }

    public function DataPemasukan()
    {
        $data['title'] = "Data Pemasukan";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pemasukan/DataPemasukan', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pemasukan/DataPemasukan', $data);
        } else {
            redirect('auth');
        }
    }

    public function DataPengeluaran()
    {
        $data['title'] = "Data Pengeluaran";
        $data['pengeluaran'] = $this->db->get_where('pengeluaran')->row_array();
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pengeluaran/DataPengeluaran', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pengeluaran/DataPengeluaran', $data);
        } else {
            redirect('auth');
        }
    }

    public function KasBesar()
    {
        $data['title'] = "Kas Besar";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pengeluaran/KasBesar', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pengeluaran/KasBesar', $data);
        } else {
            redirect('auth');
        }
    }

    public function KasKecil()
    {
        $data['title'] = "Kas Kecil";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pengeluaran/KasKecil', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pengeluaran/KasKecil', $data);
        } else {
            redirect('auth');
        }
    }

    //Rekening
    public function TambahRekening()
    {
        $data['title'] = "Tambah Rekening";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Rekening/Rekening', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Rekening/Rekening', $data);
        } else {
            redirect('auth');
        }
    }

    public function DataRekening()
    {
        $data['title'] = "Data Rekening";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Rekening/DataRekening', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Rekening/DataRekening', $data);
        } else {
            redirect('auth');
        }
    }


    //Muzakki
    public function TambahMuzakki()
    {
        $data['title'] = "Tambah Muzakki";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Muzakki/TambahMuzakki', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Muzakki/TambahMuzakki', $data);
        } else {
            redirect('auth');
        }
    }

    public function DataMuzakki()
    {
        $data['title'] = "Data Muzakki";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Muzakki/DataMuzakki', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Muzakki/DataMuzakki', $data);
        } else {
            redirect('auth');
        }
    }

    //Pegawai
    public function TambahPegawai()
    {
        $data['title'] = "Tambah Pegawai";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pegawai/TambahPegawai', $data);
        } else {
            redirect('auth');
        }
    }
    public function DataPegawai()
    {
        $data['title'] = "Data Pegawai";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        // var_dump($data);
        // die;
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pegawai/DataPegawai', $data);
        } else {
            redirect('auth');
        }
    }

    public function pemasukan_xls()
    {
        $this->load->view('export-excel/pemasukan-xls');
    }

    public function pengeluaran_xls()
    {
        $this->load->view('export-excel/pengeluaran-xls');
    }

    public function Histori()
    {
        $data['title'] = "Profil";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Histori/histori', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Histori/histori', $data);
        } else {
            redirect('auth');
        }
    }

    public function Profil()
    {
        $data['title'] = "Profil";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Profil', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Profil', $data);
        } else {
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Kamu telah keluar!</center></div></div>');
        redirect('auth');
    }


    function edit_pemasukan()
    {
        $data['title'] = "Edit Pemasukan";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pemasukan/EditPemasukan', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pemasukan/EditPemasukan', $data);
        } else {
            redirect('auth');
        }
    }

    function edit_pengeluaran()
    {
        $data['title'] = "Edit Pengeluaran";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pengeluaran/EditPengeluaran', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Pengeluaran/EditPengeluaran', $data);
        } else {
            redirect('auth');
        }
    }

    function edit_pegawai()
    {
        $data['title'] = "Edit Pegawai";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Pegawai/EditPegawai', $data);
        } else {
            redirect('auth');
        }
    }

    function edit_muzakki()
    {
        $data['title'] = "Edit Pemasukan";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/muzakki/editmuzakki', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/muzakki/editmuzakki', $data);
        } else {
            redirect('auth');
        }
    }

    function edit_rekening()
    {
        $data['title'] = "Edit Rekening";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/Rekening/EditRekening', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/Rekening/EditRekening', $data);
        } else {
            redirect('auth');
        }
    }
    function edit_profil()
    {
        $data['title'] = "Edit Profil";
        $data['pegawai'] = $this->db->get_where('pegawai', ['email' => $this->session->userdata('email')])->row_array();
        if ($data['pegawai']['level'] == 1) {
            $this->load->view('Admin/edit_profil', $data);
        } else if ($data['pegawai']['level'] == 2) {
            $this->load->view('Karyawan/edit_profil', $data);
        } else {
            redirect('auth');
        }
    }
}

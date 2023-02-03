<?php


class querylazismu extends CI_Controller
{

    function record($id_pegawai, $jenis)
    {
        $id_histori = $this->db->query("SELECT max(id_histori) as id_histori FROM histori")->row()->id_histori;
        if ($id_histori == null) {
            $id_histori = 1;
            $data = array(
                'id_histori' => $id_histori,
                'tanggal' => date("Y-m-d"),
                'waktu' => date("h:i:sa"),
                'id_pegawai' => $id_pegawai,
                'jenis' => $jenis
            );

            $this->db->insert('histori', $data);
        } else {
            $id_histori = $id_histori + 1;
            $data = array(
                'id_histori' => $id_histori,
                'tanggal' => date("Y-m-d"),
                'waktu' => date("h:i:sa"),
                'id_pegawai' => $id_pegawai,
                'jenis' => $jenis
            );

            $this->db->insert('histori', $data);
        }
    }
    function tambah_pemasukan()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $id_muzakki = $this->input->post('id_muzakki');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $jam_transaksi = $this->input->post('jam_transaksi');
        $nominal = $this->input->post('nominal');
        $id_rekening = $this->input->post('id_rekening');
        $id_pegawai = $this->input->post('id_pegawai');
        $jenis_transaksi = $this->input->post('jenis_transaksi');
        $opt = $this->input->post('opt');
        $ket = $this->input->post('ket');
        if ($tgl_transaksi == null || $jam_transaksi == null || $nominal == null) {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Jangan Kosong!!</center></div></div>');
            redirect('Beranda/Pemasukan');
        } else {
            $data = array(
                'id_transaksi' => $id_transaksi,
                'id_muzakki' => $id_muzakki,
                'tgl_transaksi' => $tgl_transaksi,
                'jam_transaksi' => $jam_transaksi,
                'nominal' => $nominal,
                'id_rekening' => $id_rekening,
                'id_pegawai' => $id_pegawai,
                'jenis_transaksi' => $jenis_transaksi,
                'ket' => $ket,
                'opt' => $opt
            );
            $this->db->insert('transaksi', $data);
            $this->record($id_pegawai, "Pemasukan");
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
            redirect('Beranda/Pemasukan');
        }
    }
    function tambah_pengeluaran()
    {
        $id_pengeluaran = $this->input->post('id_pengeluaran');
        $tgl_pengeluaran = $this->input->post('tgl_pengeluaran');
        $jam_pengeluaran = $this->input->post('jam_pengeluaran');
        $id_jenis_pengeluaran = $this->input->post('id_jenis_pengeluaran');
        $id_rekening = $this->input->post('id_rekening');
        $nominal  = $this->input->post('nominal');
        $ket = $this->input->post('ket');
        $id_pegawai = $this->input->post('id_pegawai');
        if ($tgl_pengeluaran == null || $jam_pengeluaran == null || $nominal == null) {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Data jangan kosong !!</center></div></div>');
            redirect('Beranda/pengeluaran');
        } else {
            $data = array(
                'id_pengeluaran' => $id_pengeluaran,
                'tgl_pengeluaran' => $tgl_pengeluaran,
                'jam_pengeluaran' => $jam_pengeluaran,
                'id_jenis_pengeluaran' => $id_jenis_pengeluaran,
                'id_rekening' => $id_rekening,
                'nominal' => $nominal,
                'ket' => $ket,
                'id_pegawai ' => $id_pegawai
            );

            $this->db->insert('pengeluaran', $data);
            $this->record($id_pegawai, "Pengeluaran");
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
            redirect('Beranda/pengeluaran');
        }
    }

    function tambah_rekening()
    {
        $config['upload_path'] = './uploads/rekening/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = 'image-' . date('ymd');

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_rekening') == null) {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Data jangan kosong !!</center></div></div>');
            redirect('Beranda/TambahRekening');
        } else {
            if ($this->upload->do_upload('foto_rekening')) {
                $id_pegawai = $this->session->userdata('id_pegawai');
                $id_rekening = $this->input->post('id_rekening');
                $nama_bank = $this->input->post('nama_bank');
                $nomor_rekening = $this->input->post('nomor_rekening');
                $foto_rekening = $this->upload->data('file_name');
                if ($nama_bank == null || $nomor_rekening == null) {
                    $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Data jangan kosong !!</center></div></div>');
                    redirect('Beranda/TambahRekening');
                } else {
                    $data = array(
                        'id_rekening' => $id_rekening,
                        'nama_bank' => $nama_bank,
                        'nomor_rekening' => $nomor_rekening,
                        'foto_rekening' => $foto_rekening
                    );
                    $this->db->insert('rekening', $data);
                    $this->record($id_pegawai, "Tambah Rekening");
                    $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
                    redirect('Beranda/TambahRekening');
                }
            }
        }
    }

    function tambah_muzakki()
    {
        $id_pegawai = $this->session->userdata('id_pegawai');
        $id_muzakki = $this->input->post('id_muzakki');
        $nama_muzakki = $this->input->post('nama_muzakki');
        $alamat_muzakki = $this->input->post('alamat_muzakki');
        $notelp_muzakki = $this->input->post('notelp_muzakki');
        $npwp = $this->input->post('npwp');
        $npwz  = $this->input->post('npwz');
        $id_golongan = $this->input->post('id_golongan');
        if ($nama_muzakki == null || $notelp_muzakki == null || $npwp == null || $npwz == null || $alamat_muzakki == null) {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Data jangan kosong !!</center></div></div>');
            redirect('Beranda/TambahMuzakki');
        } else {
            $data = array(
                'id_muzakki' => $id_muzakki,
                'nama_muzakki' => $nama_muzakki,
                'alamat_muzakki' => $alamat_muzakki,
                'notelp_muzakki' => $notelp_muzakki,
                'npwp' => $npwp,
                'npwz' => $npwz,
                'id_golongan' => $id_golongan
            );
            $this->db->insert('muzakki', $data);
            $this->record($id_pegawai, "Tambah Muzakki");
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
            redirect('Beranda/TambahMuzakki');
        }
    }

    function tambah_pegawai()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $email = $this->input->post('email');
        $alamat = $this->input->post('alamat');
        $password = $this->input->post('password');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $konfirmasi_password = $this->input->post('konfirmasi_password');
        $level  = $this->input->post('level');
        $is_aktif = 1;
        if ($nama_pegawai == null || $email == null || $password == null || $konfirmasi_password == null) {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Data jangan kosong !!</center></div></div>');
            redirect('Beranda/TambahPegawai');
        } else {
            if ($password == $konfirmasi_password) {
                $data = array(
                    'id_pegawai' => $id_pegawai,
                    'nama_pegawai' => $nama_pegawai,
                    'alamat_lengkap' => $alamat,
                    'email' => $email,
                    'tanggal_lahir' => $tanggal_lahir,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                    'level' => $level,
                    'is_aktif' => $is_aktif
                );
                $this->db->insert('pegawai', $data);
                $this->record($id_pegawai, "Tambah Pegawai");
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
                redirect('Beranda/TambahPegawai');
            } else {
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Password Tidak Sama!</center></div></div>');
                redirect('Beranda/TambahPegawai');
            }
        }
    }


    #Hapus Data
    function hapus_pemasukan()
    {
        $id = $_GET['id'];
        $this->db->query("DELETE FROM transaksi WHERE id_transaksi = $id");
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data berhasil dihapus</center></div></div>');
        redirect('Beranda/datapemasukan');
    }

    function hapus_pengeluaran()
    {
        $id = $_GET['id'];
        $this->db->query("DELETE FROM pengeluaran WHERE id_pengeluaran = $id");
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data berhasil dihapus</center></div></div>');
        redirect('Beranda/datapemasukan');
    }

    function hapus_pegawai()
    {
        $id = $_GET['id'];
        $this->db->query("DELETE FROM pegawai WHERE id_pegawai = $id");
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data berhasil dihapus</center></div></div>');
        redirect('Beranda/datapegawai');
    }

    function hapus_muzakki()
    {
        $id = $_GET['id'];
        $this->db->query("DELETE FROM muzakki WHERE id_muzakki = $id");
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data berhasil dihapus</center></div></div>');
        redirect('Beranda/datamuzakki');
    }

    function hapus_rekening()
    {
        $id = $_GET['id'];
        $this->db->query("DELETE FROM rekening WHERE id_rekening = $id");
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data berhasil dihapus</center></div></div>');
        redirect('Beranda/datarekening');
    }

    #edit data

    function edit_pemasukan()
    {
        $id_transaksi = $this->input->post('id_transaksi');
        $id_muzakki = $this->input->post('id_muzakki');
        $tgl_transaksi = $this->input->post('tgl_transaksi');
        $jam_transaksi = $this->input->post('jam_transaksi');
        $nominal = $this->input->post('nominal');
        $id_rekening = $this->input->post('id_rekening');
        $id_pegawai = $this->input->post('id_pegawai');
        $jenis_transaksi = $this->input->post('jenis_transaksi');
        $opt = $this->input->post('opt');
        $ket = $this->input->post('ket');

        $where = array(
            'id_transaksi' => $id_transaksi
        );
        $data = array(
            'id_muzakki' => $id_muzakki,
            'tgl_transaksi' => $tgl_transaksi,
            'jam_transaksi' => $jam_transaksi,
            'nominal' => $nominal,
            'id_rekening' => $id_rekening,
            'id_pegawai' => $id_pegawai,
            'jenis_transaksi' => $jenis_transaksi,
            'ket' => $ket,
            'opt' => $opt
        );
        $this->db->where($where);
        $this->db->update('transaksi', $data);
        $this->record($id_pegawai, "Edit Pemasukan");
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil di Update</center></div></div>');
        redirect('Beranda/datapemasukan');
    }

    function edit_pengeluaran()
    {
        $id_pengeluaran = $this->input->post('id_pengeluaran');
        $tgl_pengeluaran = $this->input->post('tgl_pengeluaran');
        $jam_pengeluaran = $this->input->post('jam_pengeluaran');
        $id_jenis_pengeluaran = $this->input->post('id_jenis_pengeluaran');
        $id_rekening = $this->input->post('id_rekening');
        $nominal  = $this->input->post('nominal');
        $ket = $this->input->post('ket');
        $id_pegawai = $this->input->post('id_pegawai');
        if ($tgl_pengeluaran == null || $jam_pengeluaran == null || $nominal == null) {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Data jangan kosong !!</center></div></div>');
            redirect('Beranda/pengeluaran');
        } else {
            $data = array(
                'tgl_pengeluaran' => $tgl_pengeluaran,
                'jam_pengeluaran' => $jam_pengeluaran,
                'id_jenis_pengeluaran' => $id_jenis_pengeluaran,
                'id_rekening' => $id_rekening,
                'nominal' => $nominal,
                'ket' => $ket,
                'id_pegawai ' => $id_pegawai
            );
            $where = array(
                'id_pengeluaran' => $id_pengeluaran
            );
            $this->db->where($where);
            $this->db->update('pengeluaran', $data);
            $this->record($id_pegawai, "Update Pengeluaran");
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
            redirect('Beranda/datapengeluaran');
        }
    }

    function edit_pegawai()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $nama_pegawai = $this->input->post('nama_pegawai');
        $email = $this->input->post('email');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level  = $this->input->post('level');
        $is_aktif = 1;
        if ($password == null) {
            $data = array(
                'nama_pegawai' => $nama_pegawai,
                'email' => $email,
                'username' => $username,
                'level' => $level,
                'is_aktif' => $is_aktif
            );
            $where = array(
                'id_pegawai' => $id_pegawai
            );
        } else {
            $data = array(
                'nama_pegawai' => $nama_pegawai,
                'email' => $email,
                'username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT),
                'level' => $level,
                'is_aktif' => $is_aktif
            );
            $where = array(
                'id_pegawai' => $id_pegawai
            );
        }
        $this->db->where($where);
        $this->db->update('pegawai', $data);
        $this->record($id_pegawai, "Edit     Pegawai");
        $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
        redirect('Beranda/datapegawai');
    }

    function edit_muzakki()
    {
        $id_pegawai = $this->session->userdata('id_pegawai');
        $id_muzakki = $this->input->post('id_muzakki');
        $nama_muzakki = $this->input->post('nama_muzakki');
        $alamat_muzakki = $this->input->post('alamat_muzakki');
        $notelp_muzakki = $this->input->post('notelp_muzakki');
        $npwp = $this->input->post('npwp');
        $npwz  = $this->input->post('npwz');
        $id_golongan = $this->input->post('id_golongan');
        if ($nama_muzakki == null || $notelp_muzakki == null || $npwp == null || $npwz == null || $alamat_muzakki == null) {
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Data jangan kosong !!</center></div></div>');
            redirect('Beranda/TambahMuzakki');
        } else {
            $data = array(
                'nama_muzakki' => $nama_muzakki,
                'alamat_muzakki' => $alamat_muzakki,
                'notelp_muzakki' => $notelp_muzakki,
                'npwp' => $npwp,
                'npwz' => $npwz,
                'id_golongan' => $id_golongan
            );
            $where = array(
                'id_muzakki' => $id_muzakki
            );
            $this->db->where($where);
            $this->db->update('muzakki', $data);
            $this->record($id_pegawai, "Tambah Muzakki");
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
            redirect('Beranda/dataMuzakki');
        }
    }

    function edit_rekening()
    {
        $config['upload_path'] = './uploads/rekening/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = 'image-' . date('ymd');

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_rekening') == null) {
            $id_pegawai = $this->session->userdata('id_pegawai');
            $id_rekening = $this->input->post('id_rekening');
            $nama_bank = $this->input->post('nama_bank');
            $nomor_rekening = $this->input->post('nomor_rekening');
            $foto_rekening = $this->upload->data('file_name');
            if ($nama_bank == null || $nomor_rekening == null) {
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Data jangan kosong !!</center></div></div>');
                redirect('Beranda/Rekening');
            } else {
                $data = array(
                    'nama_bank' => $nama_bank,
                    'nomor_rekening' => $nomor_rekening
                );
                $where = array(
                    'id_rekening' => $id_rekening
                );
                $this->db->where($where);
                $this->db->update('rekening', $data);
                $this->record($id_pegawai, "Tambah Rekening");
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
                redirect('Beranda/dataRekening');
            }
        } else {
            if ($this->upload->do_upload('foto_rekening')) {
                $id_pegawai = $this->session->userdata('id_pegawai');
                $id_rekening = $this->input->post('id_rekening');
                $nama_bank = $this->input->post('nama_bank');
                $nomor_rekening = $this->input->post('nomor_rekening');
                $foto_rekening = $this->upload->data('file_name');
                if ($nama_bank == null || $nomor_rekening == null) {
                    $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-danger" role="alert"><center>Data jangan kosong !!</center></div></div>');
                    redirect('Beranda/Rekening');
                } else {
                    $data = array(
                        'nama_bank' => $nama_bank,
                        'nomor_rekening' => $nomor_rekening,
                        'foto_rekening' => $foto_rekening
                    );
                    $where = array(
                        'id_rekening' => $id_rekening
                    );
                    $this->db->where($where);
                    $this->db->update('rekening', $data);
                    $this->record($id_pegawai, "Tambah Rekening");
                    $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
                    redirect('Beranda/dataRekening');
                }
            }
        }
    }

    function edit_profil()
    {

        $config['upload_path'] = './uploads/users/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['max_size'] = '2048';
        $config['file_name'] = 'image-' . date('ymd');

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('foto_rekening') == null) {
            $id_pegawai = $this->session->userdata('id_pegawai');
            $email = $this->input->post('email');
            $nik_pegawai = $this->input->post('nik_pegawai');
            $nama_pegawai = $this->input->post('nama_pegawai');
            $alamat_lengkap = $this->input->post('alamat_lengkap');
            $tanggal_lahir = $this->input->post('tanggal_lahir');
            $jenis_kelamin = $this->input->post('jenis_kelamin');
            $data = array(
                'NIK_pegawai' => $nik_pegawai,
                'nama_pegawai' => $nama_pegawai,
                'alamat_lengkap' => $alamat_lengkap,
                'tanggal_lahir' => $tanggal_lahir,
                'nama_pegawai' => $nama_pegawai,
                'jenis_kelamin' => $jenis_kelamin
            );
            $where = array(
                'id_pegawai' => $id_pegawai
            );
            $this->db->where($where);
            $this->db->update('pegawai', $data);
            $this->record($id_pegawai, "Tambah Rekening");
            $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
            redirect('Beranda/profil');
        } else {
            if ($this->upload->do_upload('foto_pegawai')) {
                $id_pegawai = $this->session->userdata('id_pegawai');
                $email = $this->input->post('email');
                $alamat_lengkap = $this->input->post('alamat_lengkap');
                $nik_pegawai = $this->input->post('nik_pegawai');
                $nama_pegawai = $this->input->post('nama_pegawai');
                $tanggal_lahir = $this->input->post('tanggal_lahir');
                $jenis_kelamin = $this->input->post('jenis_kelamin');
                $foto_pegawai = $this->upload->data('file_name');
                $data = array(
                    'NIK_pegawai' => $nik_pegawai,
                    'alamat_lengkap' => $alamat_lengkap,
                    'nama_pegawai' => $nama_pegawai,
                    'tanggal_lahir' => $tanggal_lahir,
                    'nama_pegawai' => $nama_pegawai,
                    'jenis_kelamin' => $jenis_kelamin,
                    'foto_pegawai' => $foto_pegawai
                );
                $where = array(
                    'id_pegawai' => $id_pegawai
                );
                $this->db->where($where);
                $this->db->update('pegawai', $data);
                $this->record($id_pegawai, "Tambah Rekening");
                $this->session->set_flashdata('message', '<div class="form-group"> <div class="alert-success" role="alert"><center>Data Berhasil Ditambah</center></div></div>');
                redirect('Beranda/profil');
            }
        }
    }
}

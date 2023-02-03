<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $title; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css">
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- daterange picker -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="<?= base_url('') ?>assets/dist/img/lazismu.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Lazismu</span> </a> <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="<?= base_url('') ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="" class="d-block"><?= $pegawai['nama_pegawai']; ?></a>
                    </div>
                </div>

                <!-- Sidebar -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/pemasukan" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-pencil"></i>
                                <p>
                                    Pemasukan
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/pengeluaran" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-laptop"></i>
                                <p>
                                    Pengeluaran
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">CEK DATA</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/datapemasukan" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-inbox"></i>
                                <p>
                                    Pemasukan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/datapengeluaran" class="nav-link active">
                                <i class="nav-icon fa fa-fw fa-shopping-cart"></i>
                                <p>
                                    Pengeluaran
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/kasbesar" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-money"></i>
                                <p>
                                    Kas Besar
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/kaskecil" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-book"></i>
                                <p>
                                    Kas Kecil
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">REKENING</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/tambahrekening" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-inbox"></i>
                                <p>
                                    Tambah Rekening
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/datarekening" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-shopping-cart"></i>
                                <p>
                                    Data Rekening
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">MUZAKKI</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/tambahmuzakki" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-inbox"></i>
                                <p>
                                    Tambah Muzakki
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/datamuzakki" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-shopping-cart"></i>
                                <p>
                                    Data Muzakki
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">PEGAWAI</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/TambahPegawai" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-inbox"></i>
                                <p>
                                    Tambah Pegawai
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/datapegawai" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-shopping-cart"></i>
                                <p>
                                    Data Pegawai
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">RECORD INPUT DATA</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/histori" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-user"></i>
                                <p>
                                    Histori
                                </p>
                            </a>
                        </li>

                        <li class="nav-header">AKUN</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/profil" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-user"></i>
                                <p>
                                    Profil
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/logout" class="nav-link">
                                <i class="nav-icon fa fa-fw fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark"><?= $title; ?></h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- SELECT2 EXAMPLE -->
                    <div class="card card-default">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?= $this->session->flashdata('message') ?>

                            <?php $id = $_GET['id']; ?>
                            <form action="<?= base_url('') ?>querylazismu/edit_pengeluaran" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ID Pegawai</label>
                                            <input type="text" class="form-control" value="<?php echo $pegawai['id_pegawai']; ?>" disabled>
                                            <input type="text" name="id_pegawai" id="id_pegawai" class="form-control" value="<?php echo $pegawai['id_pegawai']; ?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label>ID Pengeluaran</label>
                                            <?php
                                            $koneksi = new mysqli('localhost', 'root', '', 'db_lazismu');

                                            $qy = "SELECT * FROM pengeluaran ORDER BY id_pengeluaran DESC LIMIT 1";
                                            $qy2 = mysqli_query($koneksi, $qy);
                                            $row = mysqli_fetch_assoc($qy2);
                                            ?>
                                            <input type="text" class="form-control" value="<?php echo $this->db->query("SELECT id_pengeluaran FROM pengeluaran WHERE id_pengeluaran = $id")->row()->id_pengeluaran ?>" disabled>
                                            <input type="text" name="id_pengeluaran" id="id_pengeluaran" class="form-control" value="<?php echo $this->db->query("SELECT id_pengeluaran FROM pengeluaran WHERE id_pengeluaran = $id")->row()->id_pengeluaran ?>" hidden>
                                        </div>
                                        <div class="form-group">
                                            <label>ID Jenis Pengeluaran</label>
                                            <select class="form-control select2bs4" id="id_jenis_pengeluaran" name="id_jenis_pengeluaran" style="width: 100%;">
                                                <?php
                                                $koneksi = new mysqli('localhost', 'root', '', 'db_lazismu');
                                                $data = "SELECT * FROM jenis_pengeluaran";
                                                $query = mysqli_query($koneksi, $data);

                                                foreach ($query as $key) {
                                                ?>
                                                    <option value="<?php echo $key['id_pengeluaran'] ?>"><?php echo $key['id_pengeluaran'] . " - " . $key['nama_pengeluaran'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>ID Rekening</label>
                                            <select class="form-control select2bs4" id="id_rekening" name="id_rekening" style="width: 100%;">
                                                <?php
                                                $koneksi = new mysqli('localhost', 'root', '', 'db_lazismu');

                                                $data = "SELECT * FROM rekening";
                                                $query = mysqli_query($koneksi, $data);

                                                foreach ($query as $key) {
                                                ?>
                                                    <option value="<?php echo $key['id_rekening'] ?>"><?php echo $key['id_rekening'] . " - " . $key['nama_bank'] ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Pengeluaran</label>
                                            <input type="text" class="form-control" name="tgl_pengeluaran" id="tgl_pengeluaran" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy/mm/dd" placeholder="2020/05/01" value="<?php echo $this->db->query("SELECT tgl_pengeluaran FROM pengeluaran WHERE id_pengeluaran = $id")->row()->tgl_pengeluaran ?>" data-mask>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Jam Pengeluaran</label>
                                            <input type="text" name="jam_pengeluaran" id="jam_pengeluaran" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputFormat="HH:MM" placeholder="13:10" value="<?php echo $this->db->query("SELECT jam_pengeluaran FROM pengeluaran WHERE id_pengeluaran = $id")->row()->jam_pengeluaran ?>" data-mask>
                                        </div>
                                        <div class="form-group">
                                            <label>Nominal</label>
                                            <input type="text" name="nominal" id="nominal" class="form-control" value="<?php echo $this->db->query("SELECT nominal FROM pengeluaran WHERE id_pengeluaran = $id")->row()->nominal ?>">
                                        </div>
                                        <div class="form-group">
                                            <label>keterangan</label>
                                            <textarea type="text" name="ket" id="ket" rows="4" class="form-control" placeholder="Keterangan..."><?php echo $this->db->query("SELECT ket FROM pengeluaran WHERE id_pengeluaran = $id")->row()->ket ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-grup mb-3"></div>

                                <div class="input-grup">
                                    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
                                    <!-- /.col -->
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </section>


        </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('') ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('') ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="<?= base_url('') ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="<?= base_url('') ?>assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="<?= base_url('') ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url('') ?>assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="<?= base_url('') ?>assets/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->

    <script src="<?= base_url('') ?>assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?= base_url('') ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="<?= base_url('') ?>assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('') ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('') ?>assets/dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })
            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function(start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                }
            )

            //Timepicker
            $('#timepicker').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

            //Colorpicker
            $('.my-colorpicker1').colorpicker()
            //color picker with addon
            $('.my-colorpicker2').colorpicker()

            $('.my-colorpicker2').on('colorpickerChange', function(event) {
                $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
            });

            $("input[data-bootstrap-switch]").each(function() {
                $(this).bootstrapSwitch('state', $(this).prop('checked'));
            });

        })
    </script>
</body>

</html>
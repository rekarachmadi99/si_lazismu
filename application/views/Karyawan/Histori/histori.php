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
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1 /css/ionicons.min.css">
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
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
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
                            <a href="<?= base_url('') ?>beranda/datapengeluaran" class="nav-link">
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

                        <li class="nav-header">RECORD INPUT DATA</li>
                        <li class="nav-item">
                            <a href="<?= base_url('') ?>beranda/histori" class="nav-link active">
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
                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID Histori</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Nama pegawai</th>
                                            <th>Jenis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $koneksi = new mysqli('localhost', 'root', '', 'db_lazismu');

                                        $data = "SELECT histori.id_histori as id_histori, histori.tanggal as tanggal,histori.waktu as waktu, pegawai.nama_pegawai as nama_pegawai, histori.jenis as jenis FROM histori INNER JOIN pegawai ON histori.id_pegawai = pegawai.id_pegawai";
                                        $query = mysqli_query($koneksi, $data);

                                        foreach ($query as $key) {
                                        ?>
                                            <tr>
                                                <td><?php echo $key['id_histori'] ?></td>
                                                <td><?php echo $key['tanggal'] ?></td>
                                                <td><?php echo $key['waktu'] ?></td>
                                                <td><?php echo $key['nama_pegawai'] ?></td>
                                                <td><?php echo $key['jenis'] ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>

                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?= base_url('') ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?= base_url('') ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url('') ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('') ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('') ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url('') ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url('') ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url('') ?>assets/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>
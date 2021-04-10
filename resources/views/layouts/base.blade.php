<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pembayaran SPP | SMKN 2 Bandung</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    @livewireStyles
    <style>
        th {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        @include('template.navbar')
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        @include('template.sidebar')
        <!-- /.Main Sidebar Container -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            {{$slot}}
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>

    @livewireScripts
    <script>

        // CRUD Siswa
        window.addEventListener('openUpdateSiswa', event => {
            $('#simpanSiswa').modal('show');
        });
        window.addEventListener('openDeleteSiswa', event => {
            $('#hapusSiswa').modal('show');
        });

        // CRUD Siswa User
        window.addEventListener('openUpdateSiswaUser', event => {
            $('#simpanSiswaUser').modal('show');
        });
        window.addEventListener('openDeleteSiswaUser', event => {
            $('#hapusSiswaUser').modal('show');
        });

        //CRUD Petugas
        window.addEventListener('openUpdatePetugas', event => {
            $('#simpanPetugas').modal('show');
        });
        window.addEventListener('openDeletePetugas', event => {
            $('#hapusPetugas').modal('show');
        });

        //CRUD Kelas
        window.addEventListener('openUpdateKelas', event => {
            $('#simpanKelas').modal('show');
        });
        window.addEventListener('openDeleteKelas', event => {
            $('#hapusKelas').modal('show');
        });

        //CRUD SPP
        window.addEventListener('openUpdateSPP', event => {
            $('#simpanSPP').modal('show');
        });
        window.addEventListener('openDeleteSPP', event => {
            $('#hapusSPP').modal('show');
        });

        // Transaksi Pembayaran
        window.addEventListener('openjumlahBayarModal', event => {
            $('#jumlahBayar').modal('show');
        });
        window.addEventListener('closeDeleteModal', event => {
            $('#jumlahBayar').modal('hide');
        });

        //Hide Modal
        window.addEventListener('closeDeleteModal', event => {
            $('#hapusModal').modal('hide');
        });

        //Tahun
        var start = 2010;
        var end = new Date().getFullYear();
        var options = '<option selected hidden value="">Masukkan tahun</option>';
        for (var year = start; year <= end; year++) {
            options += '<option value="' + year + '">' + year + '</option>';
        }
        document.getElementById("year").innerHTML = options;
    </script>

</body>

</html>

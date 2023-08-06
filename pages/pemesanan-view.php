<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi CRUD | RD</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../dist/img/rd - background.png " alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Renn Design</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Master Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
            </ul>
          </li>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="pemesanan-view.php" class="nav-link">
            <i class="nav-icon fa fa-folder-open" aria-hidden="true"></i>
              <p>
                Data Pemesanan
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            </ul>
          </li>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="project-view.php" class="nav-link">
            <i class="nav-icon fa fa-info-circle" aria-hidden="true"></i>
              <p>
                Manage Project
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            </ul>
          </li>
      </nav>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="manageuser-view.php" class="nav-link">
              <i class="nav-icon fa fa-cogs" aria-hidden="true"></i>
              <p>
                Manage User
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            </ul>
          </li>
      </nav>
      <br>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a onclick="logout()" href="login.php" class="nav-link">
            <script>
              function logout(){
                alert('Anda yakin untuk keluar?')
              }
            </script>
              <i class="nav-icon fa  fa-sign-out"></i>
              <p>
                Logout
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Pemesanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Pemesanan</li>
            </ol>
          </div>
        </div>
      </div>
    <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-header">
                <a class='btn btn-sm btn-success' href='../tambah/pemesanan-tambah.php'><i class="fa fa-plus" style="padding-right: 5px;"></i>Tambah</a>
                <?php
                include('../config.php');
                // READ - Menampilkan data dari database
                $no = 1;
                $data = mysqli_query($mysqli, " SELECT * FROM tb_pemesanan ");
                $hasPrinted = false; // Variabel untuk memastikan hanya mencetak tombol print satu kali
                while ($row = mysqli_fetch_array($data)) {
                  if (!$hasPrinted) {
                    echo "<a style='height: 30px; width: 140px; float: right;' class='btn btn-sm btn-info' href='../pemesanan-pdf.php?no=" . $row["no"] . "'><i class='fas fa fa-print' style='padding-right: 5px;'></i>Print </a>";
                    $hasPrinted = true; // Set hasPrinted menjadi true setelah tombol pertama dicetak
                  }
                }
                ?>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <?php
                include('../config.php');
                // READ - Menampilkan data dari database
                $no = 1;
                $tabledata = "";
                $data = mysqli_query($mysqli, " SELECT * FROM tb_pemesanan ");
                while($row = mysqli_fetch_array($data)){
                      $tabledata .= "
                            <tr>
                                  <td>".$row["no"]."</td>
                                  <td>".$row["nama_pemesan"]."</td>
                                  <td>".$row["no_telp"]."</td>
                                  <td>".$row["jenis"]."</td>
                                  <td><strong>".$row["status"]."</strong></td>
                                  <td>
                                        <a class='btn btn-sm btn-success' href='../edit/pemesanan-edit.php?no=".$row["no"]."'>Edit</a>
                                        &nbsp;-&nbsp;
                                        <a class='btn btn-sm btn-danger' href='../hapus/pemesanan-hapus.php?no=".$row["no"]."' 
                                        onclick='return confirm(\"Yakin Deck ?\");'>Hapus</a>
                                  </td>
                            </tr>
                      ";
                      $no++;
                }
                echo "
                <table class='table table-hover text-nowrap'>
                  <thead>
                    <tr>
                      <th>No Pemesanan</th>
                      <th>Nama Pemesan</th>
                      <th>No Telp</th>
                      <th>Jenis</th>
                      <th>Status</th>
                      <th>Acction</th>
                    </tr>
                  </thead>
                  $tabledata
                </table>
                "
                ?>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
  </div>
  </section>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2023</strong> Egi Renaldi
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
</body>
</html>

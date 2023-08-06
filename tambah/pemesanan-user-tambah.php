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
            <a href="../dashboard-user.php" class="nav-link">
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
            <a href="../pages/pemesanan-view-user.php" class="nav-link">
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
            <a href="#" onclick="akses()" class="nav-link">
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
            <a href="#" onclick="akses()" class="nav-link">
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
            <a onclick="logout()" href="../login.php" class="nav-link">
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
        <script>
            function akses() {
            alert('Akses tidak di berikan, Anda bukan admin!')
            }
        </script>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid ">
        <br>
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Data Pemesanan - Tambah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="pemesanan-tambah.php" method="post">
                <div class="card-body">
                <label for="no">No Pemesanan : <span style="color:red;">*</span></label><br>
                <input class="form-control" type="number" name="no" maxlength="4" placeholder="no pemesanan" /><br>

                <label for="nama_pemesan">Nama Pemesan :</label><br>
                <input class="form-control" type="text" name="nama_pemesan" placeholder="nama pemesan" /><br>

                <label for="No_telp">No Telp :</label><br>
                <input class="form-control" type="text" name="no_telp" placeholder="no telp" /><br>

                
                <?php
                include('../config.php');

                if (isset($_GET["no"])) {
                    $no = $_GET["no"];
                    $check_no = "SELECT * FROM tb_project WHERE no = '$no';"; // Use $no instead of $id
                    $query = mysqli_query($mysqli, $check_no);
                    $row = mysqli_fetch_array($query);
                }

                // Fetch data for the <select> element
                $fetch_projects = "SELECT id, project FROM tb_project"; // Change the table and column names as needed
                $result = mysqli_query($mysqli, $fetch_projects);

                // Check if the query was successful
                if (!$result) {
                    die("Query failed: " . mysqli_error($mysqli));
                }
                ?>

                <label>Jenis</label>
                <select name="jenis" class="form-control select2" style="width: 100%;">
                    <option value="">Select Project</option>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($project = mysqli_fetch_assoc($result)) {
                            $selected = ($row && $row["jenis"] == $project["id"]) ? "selected" : "";
                            echo '<option value="' . $project['project'] . '" ' . $selected . '>' . $project['project'] . '</option>';
                        }
                    }
                    ?>
                </select>
                <!-- <label>Jenis</label>
                  <select name="jenis" class="form-control select2" style="width: 100%;">
                    <option value="Desain Baju Kaos">Desain Baju Kaos</option>
                    <option value="Desain Hoodie">Desain Hoodie</option>
                    <option value="Desain Banner">Desain Banner</option>
                    <option value="Desain E-Sertifikat">Desain E-Sertifikat</option>
                    <option value="Desain Web">Desain Web</option>
                    <option value="Desain Aplikasi">Desain Aplikasi</option>
                    <option value="Desain UI Web">Desain UI Web</option>
                    <option value="Desain UI Aplikasi">Desain UI Aplikasi</option>
                  </select><br> -->

                  <label>Status</label>
                  <select name="status" class="form-control select2" style="width: 100%;">
                    <option value="Sudah Di Kirim">Sudah Di Kirim</option>
                    <option value="Dalam Proses">Sedang Dalam Pengerjaan</option>
                  </select>
                  <br>
                 <!-- Your form fields... -->
                  <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                </div>
            </form>
            <?php
            include('../config.php'); // Pastikan Anda sudah mengimpor file koneksi.php atau sesuaikan path file yang benar

            if (isset($_POST["simpan"])) {
                $no = $_POST["no"];
                $nama_pemesan = $_POST["nama_pemesan"];
                $no_telp = $_POST["no_telp"];
                $jenis = $_POST["jenis"];
                $status = $_POST["status"];

                // Pastikan tabel tb_pemesanan ada dalam database Anda
                $query = "INSERT INTO tb_pemesanan (no, nama_pemesan, no_telp, jenis, status) VALUES ('$no', '$nama_pemesan', '$no_telp', '$jenis', '$status')";

                $insert = mysqli_query($mysqli, $query);

                if ($insert) {
                    echo "
                        <script>
                            alert('Data berhasil ditambahkan');
                            window.location='../pages/pemesanan-view-user.php';
                        </script>
                    ";
                } else {
                    echo "
                        <script>
                            alert('Gagal menambahkan data');
                            // Tambahkan tindakan untuk menangani kesalahan jika perlu
                        </script>
                    ";
                }
            }
            ?>

            </div>
            </div>
        </div>
    </section>
   </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 0.0.1
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

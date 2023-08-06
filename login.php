<!-- Main content -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi CRUD | RD</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body>  
<section class="content">
    <br>
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary shadow">
                <br>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="login.php" method="post">
                <h1 align="center" class="font-weight-bold">LOGIN ADMIN</h1>
                <br>
                <div class="d-flex justify-content-center align-items-center">
                    <img style="width:200px; height:200px;"src="dist/img/rd - background.png" alt="Logo" class="img-fluid">
                </div>
                <br>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username :</label>
                    <input type="username" name="username" class="form-control" id="exampleInputUsername" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password :</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="login" class="btn btn-block btn-primary btn-sm">Submit</button><br>
                  <p><strong><a href="login-user.php">Login Sebagai User?</a></strong></p>
                </div>
              </form>
              <?php
                include("./config.php");
                if( isset($_POST["login"]) ) {
                    $username = $_POST["username"];
                    $password = $_POST["password"];

                    $query = "SELECT * FROM login
                    WHERE username='$username' AND password=MD5('$password'); ";
                    $data = mysqli_query($mysqli, $query);
                    if(mysqli_num_rows($data) > 0) {
                        $row = mysqli_fetch_array($data);

                        $_SESSION["login"] =TRUE;
                        $_SESSION["id_akun"] = $row["id_akun"];
                        $_SESSION["username"] = $row["username"];
                       

                        echo "
                            <script>
                                alert('Login Berhasil');
                                window.location='dashboard.php';
                            </script>
                        ";
                    }else{
                        echo "
                            <script>
                                alert('Akun tidak ditemukan, coba lagi');
                                window.location='login.php';
                            </script>
                        ";
                    }
                }
            ?>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content-wrapper -->  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      },
      terms: {
        required: true
      },
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a valid email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>
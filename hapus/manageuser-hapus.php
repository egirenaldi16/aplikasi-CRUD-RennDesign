<?php
include ('../config.php');

if ( isset($_GET["id"])){
    $id = $_GET["id"];

    $query = "
          DELETE FROM userlogin
          WHERE id= '$id';
    ";
    
    $delete = mysqli_query($mysqli, $query);

    if($delete){
          echo "
                <script>
                alert('Data berhasil dihapus');
                window.location='../pages/manageuser-view.php';
                </script>
          ";
    }else{
          echo "
                <script>
                alert('Data gagal');
                window.location='../pages/manageuser-view.php';
                </script>
          ";
    }
}
?>
<?php
include ('../config.php');

if ( isset($_GET["no"])){
    $no = $_GET["no"];

    $query = "
          DELETE FROM tb_pemesanan
          WHERE no = '$no';
    ";
    
    $delete = mysqli_query($mysqli, $query);

    if($delete){
          echo "
                <script>
                alert('Data berhasil dihapus');
                window.location='../pages/pemesanan-view.php';
                </script>
          ";
    }else{
          echo "
                <script>
                alert('Data gagal');
                window.location='../pages/pemesanan-view.php';
                </script>
          ";
    }
}
?>
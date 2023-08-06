<?php
// Sertakan file koneksi database
require_once 'config.php';

// Cek apakah ada request POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $no = $_POST["no"];
    $nama = $_POST["nama"];
    $no_telp = $_POST["no_telp"];
    $jenis = $_POST["jenis"];
    $status = $_POST["status"];

    // Pastikan tabel tb_pemesanan ada dalam database Anda
    $sql = "INSERT INTO tb_pemesanan (no, nama_pemesan, no_telp, jenis, status) VALUES ('$no', '$nama', '$no_telp', '$jenis', '$status')";
   
    if (mysqli_query($mysqli, $sql)) {
        $response = array('status' => 'success', 'message' => 'Data berhasil disimpan.');
        echo "<script>alert('Pemesanan Berhasil.'); window.location.href = 'user-create.php';</script>";
    } else {
        $response = array('status' => 'error', 'message' => 'Terjadi kesalahan saat menyimpan data: ' . mysqli_error($mysqli));
        echo "<script>alert('Terjadi kesalahan saat menyimpan data: " . mysqli_error($mysqli) . "'); window.location.href = 'user-create.php';</script>";
    }
    
    // Output respons JSON
    echo json_encode($response);
}
?>

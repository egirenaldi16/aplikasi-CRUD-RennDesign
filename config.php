<?php
$host = 'localhost';  // Ganti dengan host database Anda
$user = 'root'; // Ganti dengan username database Anda
$password = ''; // Ganti dengan password database Anda
$database = 'brand_db'; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$mysqli = new mysqli($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil
if ($mysqli->connect_error) {
    die("Koneksi database gagal: " . $mysqli->connect_error);
}
?>

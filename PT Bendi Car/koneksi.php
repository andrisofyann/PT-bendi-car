<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pt bendi car";

$conn = new mysqli($host, $user, $password, $database);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
echo "Koneksi berhasil!";
?>
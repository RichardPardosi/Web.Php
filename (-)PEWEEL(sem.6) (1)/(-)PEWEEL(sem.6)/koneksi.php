<?php
// Koneksi Database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbtokoatk";

// Membuat Koneksi
$koneksi = mysqli_connect($servername, $username, $password, $dbname);

// Mengecek Koneksi
if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<?php
include("koneksi2.php");
session_start();

$username = $_POST["user"];
$password = $_POST["pass"];


$query=mysqli_query($koneksi, "select * from datacustomer where username='$username' and password='$password'");

if (mysqli_num_rows($query)>0) {
    $array = mysqli_fetch_array($query);
    $_SESSION["username"]=$array["username"];
    echo "<script>alert('Login Berhasil')</script>";
    echo "<script>window.location='dashboard.php';</script>";
}else{
    echo "<script>alert('Login Gagal')</script>";
    echo "<script>window.location='index.php';</script>";

}
    


         

?>
<?php
session_start();
include "koneksi.php";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css" />
    <title>Web | Toko ATK BKM</title>
  </head>
    <body>
      <div class="navbar">
      <img class="logo" src="assets/logo.png">
        <a href="logout.php">Logout</a>
        <a href="dashboard.php #contact">Kontak</a>
        <a href="cart.php">Keranjang</a>
        <a href="dashboard.php #Produk">Produk</a>
        <a href="dashboard.php">Beranda</a>
      </div>
     <main class="content">
        <section class="hero">
            <div class="hero-content">
                <div class="bg-content">
                </div>
            </div>
        </section>
     </main>
     <footer>
        <div class="footer-content">
            <h3>Web E-Commerce Toko ATK (Alat Tulis Kantor) BKM</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <br>
            <br>
            <ul class="socials">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024.kelompokpwl | Dibuat dengan <span>❤</span> oleh Tim Kami</p>
        </div>
        </footer>
    </body>
</html>

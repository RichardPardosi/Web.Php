<?php
session_start();
include "koneksi.php";


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="beranda.css" />
    <title>Web | Keranjang</title>
  </head>
    <body>
    <header>
        <div class="container">
          <div class="header-left">
            <img class="logo" src="assets/logo.png">
           
                
                <button>
                    
                </button>
            </form>
          </div>
          <!-- Tambahkan ikon menu dibawah -->
          <span class="fa fa-bars menu-icon"></span>

          <div class="header-right">
            <a href="beranda.php">Beranda</a>
            <a href="beranda.php #Produk">Produk</a>
            <a href="cart.php">Keranjang</a>
            <a href="logout.php"></a>
          </div>
        </div>
      </header>
      <div class="badan">
        <br>
        <br>
        <h2><center>KeranjangMu!</center></h2>
 
        <div class="list-produk">
            <img src="assets/joyko.jpg">
            <h4>Pulpen Joyko</h4>
            <h5>Rp 5.000,-</h5>
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
 
        <div class="list-produk">
            <img src="assets/tp.jpeg">
            <h4>Tape x</h4>
            <h5>Rp 5.000,-</h5>
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
 
        <div class="list-produk">
            <img src="assets/bk.jpeg">
            <h4>Buku Tulis</h4>
            <h5>Rp 5.000,-</h5>
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/joyko.jpg">
          <h4>Pulpen Joyko</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/joyko.jpg">
          <h4>Pulpen Joyko</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
 
        <div class="list-produk">
          <img src="assets/joyko.jpg">
          <h4>Pulpen Joyko</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/joyko.jpg">
          <h4>Pulpen Joyko</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/joyko.jpg">
          <h4>Pulpen Joyko</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/joyko.jpg">
          <h4>Pulpen Joyko</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/joyko.jpg">
          <h4>Pulpen Joyko</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
      </div>
      <br>
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
      </div>
    </div>
  </body>
</html>
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
        <a href="kontak.php">Kontak</a>
        <a href="keranjang.php">Keranjang</a>
        <a href="#Produk">Produk</a>
        <a href="index.php">Beranda</a>
        <a href="login.php">Login</a>
      </div>
      <div class="main">
        <p>Some text some text some text some text...</p>
      </div>
    </br>
    </br>
    </br>
      <main class="content">
        <section class="hero">
          <div class="hero-content">
            <div class="bg-content">
            <img class="bg" src="assets/promo.png">
          </div>
            <h1>TOKO ATK BKM</h1>
            <br />
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, aperiam dolore assumenda velit repellendus recusandae magni consectetur mollitia facere incidunt inventore perspiciatis debitis doloribus ullam minima culpa
              voluptatem. Repellendus, option.
            </p>
            <a href="profile.html" class="action-btn">Profile Toko</a>
            <marquee>
              <h2>Lengkapi Kebutuhan Alat Tulismu Sekarang!</h2>
            </marquee>
            <br /><br />
          </div>
        </section>
      </main>
      <div class="badan" id="Produk">
      
        <h2><center>Katalog Produk</center></h2>
        <input type="text" placeholder="Cari Produk..." class="search">
        <br>
        <div class="list-produk">
            <img src="assets/joyko.jpg">
            <h4>Pulpen Joyko</h4>
            <h5>Rp 5.000,-</h5>
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
 
        <div class="list-produk">
            <img src="assets/gp.jpg">
            <h4>Gel Pen Joyko</h4>
            <h5>Rp 5.000,-</h5>
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
 
        <div class="list-produk">
            <img src="assets/pm.jpg">
            <h4>Mechanic Pencil</h4>
            <h5>Rp 5.000,-</h5>
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/fc.png">
          <h4>Faber-Castell 2B</h4>
          <h5>Rp 15,000,--</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/fcp.png">
          <h4>Faber-Castell Eraser</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
 
        <div class="list-produk">
          <img src="assets/tp.jpeg">
          <h4>Correction Pen</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/ct.jpg">
          <h4>Correction Tape</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/bk.jpeg">
          <h4>Campus Book</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/a4.jpg">
          <h4>Plain Paper A4</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/kp.jpg">
          <h4>Photo Paper a4</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" href="#">Beli</a>
        </div>
      </div>
      <br>
      <div class="footer">
        <footer>
          <ul>
            <li>
              <img src="assets/instagram.png" class="ig" /><a><p>Instagram</p></a>
            </li>
            <li>
              <img src="assets/facebook.png" class="fb" /><a><p>Facebook</p></a>
            </li>
            <li>
              <img src="assets/twitter.png" class="x" /><a><p>Twitter</p></a>
            </li>
            <li>
              <img src="assets/telegram.png" class="tele" /><a><p>Telegram</p></a>
            </li>
          </ul>
        </footer>
      </div>
    </div>
  </body>
</html>
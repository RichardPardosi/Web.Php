<?php
session_start();

if (empty($_SESSION["username"])){
  echo "<script>alert('Anda haruswefkwof.')</script>";
  echo "<script>window.location='login.php';</script>";

}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <title>Web | Toko ATK BKM</title>
  </head>
    <body>
      <div class="navbar">
        <img class="logo" src="assets/logo.png">
        <a href="logout.php">Logout</a>
        <a href="kontak.php">Kontak</a>
        <a href="keranjang.php">Keranjang</a>
        <a href="#Produk">Produk</a>
        <a href="dashboard.php">Beranda</a>
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
            <a href="profile.php" class="action-btn">Profile Toko</a>
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

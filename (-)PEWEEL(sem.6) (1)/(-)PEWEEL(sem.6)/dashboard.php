<?php
session_start();
include "koneksi.php";

if (empty($_SESSION["username"])){
  echo "<script>alert('Anda Harus Login .')</script>";
  echo "<script>window.location='login.php';</script>";

if(isset($_POST['tombolcari'])){
  $cari = $_POST['cari'];
  $tampil = mysqli_query($koneksi, "SELECT * FROM dataproduk WHERE namaproduk='$cari'");  

}

else{
  $tampil = mysqli_query($koneksi, "SELECT * FROM dataproduk");

}
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
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
      <div class="main">
        <p>.</p>
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
              <h2 class="h2">Lengkapi Kebutuhan Alat Tulismu Sekarang!</h2>
            </marquee>
            <br /><br />
          </div>
        </section>
      </main>
      <div class="badan" id="Produk">
      
        <h2><center>Katalog Produk</center></h2>
        <input type="text" placeholder="Cari Produk..." class="search">
        <button class="button" type="submit" name="tombolcari">Cari</button>
        <br>
        <div class="list-produk">
            <img src="assets/joyko.jpg">
            <h4>Pulpen Joyko</h4>
            <h5>Rp 5.000,-</h5>
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" alt="Pulpen Joyko" href="cart.php?action=add&id=1">Beli</a>
        </div>
 
        <div class="list-produk">
            <img src="assets/gp.jpg">
            <h4>Gel Pen Joyko</h4>
            <h5>Rp 4.000,-</h5>
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" alt="Gel Pen Joyko" href="cart.php?action=add&id=2">Beli</a>
        </div>
 
        <div class="list-produk">
            <img src="assets/pm.jpg">
            <h4>Mechanic Pencil</h4>
            <h5>Rp 5.000,-</h5>
            <a class="tombol tombol-detail" href="#">Detail</a> 
            <a class="tombol tombol-beli" alt="Mechanic Pencil" href="cart.php?action=add&id=3">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/fc.png">
          <h4>Faber-Castell 2B</h4>
          <h5>Rp 4,000,--</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" alt="Faber-Castell 2B" href="cart.php?action=add&id=4">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/fcp.png">
          <h4>Faber-Castell Eraser</h4>
          <h5>Rp 3.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" alt="Faber-Castell Eraser" href="cart.php?action=add&id=5">Beli</a>
        </div>
 
        <div class="list-produk">
          <img src="assets/tp.jpeg">
          <h4>Correction Pen</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" alt="Correction Pen" href="cart.php?action=add&id=6">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/ct.jpg">
          <h4>Correction Tape</h4>
          <h5>Rp 5.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" alt="Correction Tape" href="cart.php?action=add&id=7">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/bk.jpeg">
          <h4>Campus Book</h4>
          <h5>Rp 2.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" alt="Campus Book" href="cart.php?action=add&id=8">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/a4.jpg">
          <h4>Plain Paper A4</h4>
          <h5>Rp 45.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" alt="Plain Paper A4" href="cart.php?action=add&id=9">Beli</a>
        </div>

        <div class="list-produk">
          <img src="assets/kp.jpg">
          <h4>Photo Paper a4</h4>
          <h5>Rp 35.000,-</h5>
          <a class="tombol tombol-detail" href="#">Detail</a> 
          <a class="tombol tombol-beli" alt="Photo Paper a4" href="cart.php?action=add&id=10">Beli</a>
        </div>
      </div>
      <div class="contact-section" id="contact">
        <div class="contact-container">
            <div class="card-container">
                <div class="left">
                    <div class="left-container">
                    </div>
                </div>
                <div class="right">
                    <div class="right-container">
                        <h2 class="lg-view">Contact us</h2>
                        <form action="">
                            <input type="text" placeholder="Nama">
                            <input type="email" placeholder="Email">
                            <input type="phone" placeholder="Telp" autocomplete="off">
                            <textarea rows="10" placeholder="chat"></textarea>
                            <button>Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <br>
      <footer>
        <div class="footer-content">
            <h3>Web E-Commerce Toko ATK (Alat Tulis Kantor) BKM</h3>
            <p>Perumahan Bukit KayuManis, RT 05/12, Kec. Tanah Sereal, kel. Kayumanis, Kota Bogor, Jawa Barat</p>
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

<?php
session_start();
include "koneksi.php";

if (empty($_SESSION["username"])){
  echo "<script>alert('Anda Harus Login .')</script>";
  echo "<script>window.location='index2.php';</script>";

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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="beranda.css">
    <title>Beranda</title>
</head>
<body>
    <header>
        <div class="container">
          <div class="header-left">
            <img class="logo" src="assets/logo.png">
                
                <button>
                    <svg viewBox="0 0 1024 1024">
                        <path class="path1" q="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140
                        .706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.
                        529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.
                        455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z">
                        </path>
                    </svg>
                </button>
            </form>
          </div>
          <!-- Tambahkan ikon menu dibawah -->
          <span class="fa fa-bars menu-icon"></span>

          <div class="header-right">
            <a href="beranda.php">Beranda</a>
            <a href="beranda.php #Produk">Produk</a>
            <a href="cart.php">Keranjang</a>
            <a href="logout.php">Logout</a>
          </div>
        </div>
      </header>

      <div class="top-wrapper">
        
        <div class="container">
          <div class="banner">
            <h1>What's New?!</h1>
          </div> 
          <div class="wrapper">
            <div class="wrapper-holder">
                <div id="slide-1"></div>
                <div id="slide-2"></div>
                <div id="slide-3"></div>
                <div id="slide-4"></div>
            </div>
            <div class="button-holder">
                <a href="#slide-1" class="button"></a>
                <a href="#slide-2" class="button"></a>
                <a href="#slide-3" class="button"></a>
                <a href="#slide-4" class="button"></a>
            </div>
          </div>
        </div>
      </div>

      <div class="rekomend-item">
        <h1>Trending Brand and Collab</h1>
        <div class="list-item">

          <div class="box1">
            <div class="pitc-1">
                <a href="#"><img src="sourcepitc/INNO-logo-removebg-preview (1).png" alt=""></a>
                <br>
            </div>
            <div class="judul-1">
              <a href="#">INNO64</a>
            </div>
          </div>

          <div class="box2">
            <div class="pitc-2">
                <a href="#"><img src="sourcepitc/hot-wheels4951-removebg-preview.png" alt=""></a>
                <br>
            </div>
            <div class="judul-2">
              <a href="#">HotWheels</a>
            </div>
          </div>

          <div class="box3">
            <div class="pitc-3">
                <a href="#"><img src="sourcepitc/Screenshot_2024-05-19_194935-removebg-preview.png" alt=""></a>
                <br>
            </div>
            <div class="judul-3">
              <a href="#">Mini GT</a>
            </div>
          </div>

          <div class="box4">
            <div class="pitc-4">
                <a href="#"><img src="sourcepitc/1650010622_90447.jpg" alt=""></a>
                <br>
            </div>
            <div class="judul-4">
              <a href="#">Mini GT x KAIDO</a>
            </div>
          </div>

          <div class="box5">
            <div class="pitc-5">
                <a href="#"><img src="sourcepitc/poprace.png" alt=""></a>
                <br>
            </div>
            <div class="judul-5">
              <a href="#">Pop Race</a>
            </div>
          </div>

        </div>
      </div>


          <!--Produk Start-->
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

          <!--Produk End-->

          <!--Footer Start-->
            <footer class="footercart">
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
            <!--Footer End-->
            </div>
          </div>


          
</body>
</html>
<?php
session_start();
include "koneksi.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="beranda.css">
    <title>Document</title>
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

          <div class="header-right">
            <a href="beranda.php">Beranda</a>
            <a href="beranda.php #Produk">Produk</a>
            <a href="cart.php">Keranjang</a>
            <a href="logout.php">Logout</a>
          </div>
        </div>
      </header>

      <br><br>
      <br><br>
      <br><br>

      <h1><center>Detail Produk</center></h1>
      <br><br>
      <br><br>  

    <div class="badan" id="p1">
    <div class="list-produk">
                <img src="assets/joyko.jpg">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>
    <div class="badan" id="p2">
    <div class="list-produk">
                <img src="assets/gp.jpg">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>
    <div class="badan" id="p3">
    <div class="list-produk">
                <img src="assets/pm.jpg">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>
    <div class="badan" id="p4">
    <div class="list-produk">
                <img src="assets/fc.png">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>
    <div class="badan" id="p5">
    <div class="list-produk">
                <img src="assets/fcp.png">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>
    <div class="badan" id="p6">
    <div class="list-produk">
                <img src="assets/tp.jpeg">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>
    <div class="badan" id="p7">
    <div class="list-produk">
                <img src="assets/ct.jpg">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>
    <div class="badan" id="p8">
    <div class="list-produk">
                <img src="assets/bk.jpeg">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>
    <div class="badan" id="p9">
    <div class="list-produk">
                <img src="assets/a4.jpg">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>
    <div class="badan" id="p10">
    <div class="list-produk">
                <img src="assets/kp.jpg">
                <h4>Pulpen Joyko</h4>
                <h5>Rp 5.000,-</h5>
            </div>
    </div>
    <br><br>

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
    
</body>
</html>
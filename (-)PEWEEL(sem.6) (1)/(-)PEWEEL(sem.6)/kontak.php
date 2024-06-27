<?php
session_start();
include "koneksi.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Web | Kontak</title>
</head>
<body>
  <div class="navbar">
    <img class="logo" src="assets/logo.png">
        <a href="kontak.php">Kontak</a>
        <a href="keranjang.php">Keranjang</a>
        <a href="index.php">Beranda</a>
  </div>
      <br>
    <section id="contact" class="container my-5">
        <div class="row">
            <div class="atas">
                <center>
                    <h2 class="text-center">Contact Us</h2>
                </center>
                <br>
            </div>
            <div class="col-md-8 mx-auto border rounded p-4 shadow-sm">
                <!-- Form Contact -->
                <form>
                    <div class="mb-3">
                        <center>
                        <label for="contactName" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="contactName" placeholder="Masukkan Nama Anda">
                        </center>
                    </div>
                </br>
            </br>
                    <div class="mb-3">
                     <center>
                        <label for="contactEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" id="contactEmail" placeholder="Masukkan Email Anda">
                     </center>
                    </div>
                    <br>
                    <br>
                    <div class="mb-3">
                        <center>
                        <label for="contactMessage" class="form-label">Pesan</label>
                        <textarea class="form-control" id="contactMessage" rows="3" placeholder="Tulis PesanMu"></textarea>
                        </center>
                    </div>
                   <center>
                    <button type="submit" class="btn btn-warning">Kirim</button>
                    <button type="submit" class="btn btn-warning"><a class="component-button" href="index.html">Kembali</a></button>
                   </center>
                </form>
            </div>
        </div>
    </section>
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
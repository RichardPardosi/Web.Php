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
        <a href="kontak.php">Kontak</a>
        <a href="keranjang.php">Keranjang</a>
        <a href="index.php">Beranda</a>
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
    </body>
</html>

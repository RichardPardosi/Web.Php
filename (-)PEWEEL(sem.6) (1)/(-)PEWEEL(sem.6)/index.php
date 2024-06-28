<?php
session_start();
include "koneksi.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="bodylg">
    <br>
	<h2><center>Selamat Datang, Silahkan Login.</center></h2>

	<div class="kotak_login">
		<form method="POST" action="cek.php">
			<label>Username</label>
			<input type="text" name="user" class="form_login" placeholder="Masukkan Username Anda..." required>

			<label>Password</label>
			<input type="password" name="pass" class="form_login" placeholder="Masukkan Password Anda..." required>

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">Kembali</a>
			</center>
		</form>
	</div>


</body>
</html>
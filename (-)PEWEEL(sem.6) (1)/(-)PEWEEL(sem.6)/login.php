<?php
session_start();
include "koneksi.php";


?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" />
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="body2">
    <br>
	<h1><center>Selamat Datang, Silahkan Login!</center></h1>

	<div class="kotak_login">
		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username Anda...">

			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password Anda...">

			<input type="submit" class="tombol_login" value="LOGIN">

			<br/>
			<br/>
			<center>
				<a class="link" href="index.php">KEMBALI</a>
			</center>
		</form>
	</div>


</body>
</html>
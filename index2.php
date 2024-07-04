<?php
session_start();
include "koneksi2.php";


?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Customer</title>
	<link rel="stylesheet" type="text/css" href="dist/bootstrap/css/bootstrap.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<style>	
		body {
		    font-family: Georgia, times new roman, Times, Merriweather, Cambria, Times, serif;
		    font-weight: 300;
		    font-size: 16px;
		    line-height: 2;
		    background: url(https://wallpapers.com/images/hd/solid-background-metallic-gray-color-u1t018v59en94zwg.jpg);
		    /* color: #777; */
		    color: #4d4b4b;
		}
		.centerDiv {
			height: 100vh;
			width: 100%;
		}
	</style>	
</head>
<body>
	<div class="container-fluid">	
		<div class="row centerDiv">
			<div class="col-sm-12 my-auto">
				<div class="card border-0">

					<div class="row">
						<div class="col-md-8">
						<div class="card-body">
							<img src="assets/4.png" class="img-fluid rounded-start shadow" alt="...">
						</div>
						</div>
						<div class="col-md-4">
						<div class="card-body">
							<div class="mb-5 text-center">
								<img src="assets/logo.png" class="img-fluid" width="70" alt="logo ahmad syarifudin" title="Toko ATK BKM">
								<h7>Toko ATK BKM</h7>
								<h2 class="h5 mt-5">Login</h2>
							</div>
							<form method="POST" action="cek.php">
							<div class="mb-3">
								<input type="text" class="form-control" name="user" required>
								<div id="emailHelp" class="form-text">Masukkan Username</div>
							</div>
							<div class="mb-3">
								<input type="password" class="form-control" name="pass" required>
								<div id="emailHelp" class="form-text">Masukkan Password</div>
							</div>
							<button type="submit" class="btn btn-primary w-100" value="LOGIN">SIGN IN</button>
							</form>
						</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>	
</body>
</html>

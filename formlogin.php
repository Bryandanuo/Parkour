<!DOCTYPE html>
<html>
<style>
	<?php include 'StyleFormLogin.css'; ?>
</style>
<head>
	<title>Parkour|Cara Mudah, Cari Parkir</title>
</head>

<body>
	<header>
		<div class="container">
			<h1>P A R K O U R</h1>
		</div>
	</header>

	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "gagal"){
			echo "Login gagal! username dan password salah!";
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout!";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Silakan login terlebih dahulu";
		}
	}
	?>

	<br/>
	<br/>
		<div class="kotak_login">
			<div class="tulisan_login">
			<h1>Log In ke Akun PARKOUR</h1>
			</div>
		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="masukkan email ...">
	 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="masukkan password ...">
	 
			<input type="submit" class="tombol_login" value="LOGIN">
	 
			<br/>
			<br/>
			<center>
				<a href="formlupapassword.php">Lupa password?</a> |
				<a href="formregister.php">Register</a>
			</center>
		</form>
	
</div>

	
</body>
</html>
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
		<h1>Parkour</h1>
		<h3>Cara Mudah, Cari Parkir</h3>
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
		<form>
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="masukkan email ..">
	 
			<label>Password</label>
			<input type="text" name="password" class="form_login" placeholder="massukan password ..">
	 
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


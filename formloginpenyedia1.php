<!DOCTYPE html>
<html>
<style>
	<?php include 'styleformloginpenyedia.css'; ?>
</style>
<head>
	<title>Parkour|Cara Mudah, Cari Parkir</title>
</head>

<body>
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

<div class="kotakan">
	<div class="container">
		<a href='index.php'>
		<img class="bulat"src='p bulat.png' width='70' height='70' title='daftar sebagai pemarkir' alt='pemarkir' border='none' /></a>
	</div>
		<img class="logo"src="parkour.png">
	<div class="kotak_form">
		<form method="post" action="cek_loginpenyedia.php">
 			<table>	
			<label>Email</label>
			<input type="text" name="email" placeholder="Email Anda">
				
			<label>Password</label>
			<input type="password" name="password" placeholder="Password Anda"></td>
			<input class="tombol" type="submit" value="LOGIN"></td>
			</table>
		</form>
	</div>
</div>
</body>
<footer class="footer">Copyright©PARKOUR 2019 </footer>
</html>


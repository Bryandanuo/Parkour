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
		<img class="bulat"src='p bulat.png' width='70' height='70' title='PARKOUR' alt='pemarkir' border='none' /></a>
	</div>
		<img class="logo"src="parkour.png">
	<div class="kotak_form">
		<form method="post" action="cek_login.php">		
			<label>Username</label>
			<label><input type="text" name="username" class="form_login" placeholder="masukkan email ..." required /input></label>

			<label>Password</label>
			<label><input type="password" name="password" class="form_login" placeholder="masukkan password ..." required /input></label>
	 
			<input class="tombol" type="submit" class="tombol_login" value="LOGIN">		
			<br/>
			<br/>
				<div id="button"><a href="#popup">Lupa password?</a> |
				<a href="formregister.php">Register</a>
				</div>
		</form>
	</div>
</div>
	<div id="popup">
    <div class="window">
    	<a href="#" class="close-button" title="Close">X</a>
    	<h1>Coba inget-inget lagi dech</h1>
    </div></div>
</body>
<footer class="footer">Copyright©PARKOUR 2019 </footer>
</html>


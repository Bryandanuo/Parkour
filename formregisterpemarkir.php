<html>
<style>
	<?php include 'StyleDaftarPemarkir.css'; ?>
</style>
<head>
	<title>Parkour|Cara Mudah, Cari Parkir</title>
</head>

<body>
<div class="kotakan">
	<div class="container">
		<a href='index.php'>
		<img class="bulat"src='p bulat.png' width='70' height='70' title='daftar sebagai pemarkir' alt='pemarkir' border='none' /></a>
	</div>
	<img class="logo"src="parkour.png">
<div class="kotak_form">
<form class="dalem" action="prosesregisterpemarkir.php" method="POST">
 		<fieldset>
				<legend>BUAT AKUN</legend>
				<label for="email">E-mail</label>
				<input class="placeholder"type="text" name="email" placeholder=" masukkan alamat email anda..." required /input>
				<label for="nama">Nama</label>
				<input class="placeholder"type="text" name="nama" placeholder=" masukkan username anda..." required /input>
				<label for="password">Password</label>
				<input class="placeholder"type="password" name="password" placeholder=" masukkan password anda..." required /input>
				<br/><input  type="submit" class="tombol_daftar"  value="Daftar" name="daftar" />
		</fieldset>
</form>
</div>
</div>
</body>
<footer class="footer">Copyright©PARKOUR 2019 </footer>
</html>

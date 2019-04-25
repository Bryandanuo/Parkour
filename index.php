<!DOCTYPE html>
<html>
<style>
	<?php include 'style.css'; ?>
</style>
<head>
	<title class="h1">Parkour|Cara Mudah, Cari Parkir</title>
	<div class="container">
		<div class="loginregister">
			<a href="formregister.php">Register</a> |
			<a href="formloginsemua.php">Login</a>	
		</div>
		<div class="logo">
			<h1>P A R K O U R</h1>
		</div>
		
	</div>
</head>

<body>
	<div class="isi">
	<form action="prosespendaftaran.php" method="POST">
				<p>
			<label for="Kantong_Parkir">Kantong Parkir: </label>
			<div class="kp">
			<select name="Kantong_Parkir">
			<option value="Botani Square">Botani Square</option>
			<option value="Bogor Trade Mall">Bogor Trade Mall</option>
			<option value="Bogor Square">Bogor Square</option>
	        </select>
			</div>
		</p>
		<p>
			<label for="Jenis_Langganan">Jenis Langganan: </label>
			<select name="Jenis_Langganan">
			<option value="Isidental">Isidental</option>
			<option value="Tiga Hari">Tiga Hari</option>
			<option value="Seminggu">Seminggu</option>
			<option value="Sebulan">Sebulan</option>
	        </select>
		</p>
		<p>
			<label for="Jenis_Kendaraan">Jenis Kendaraan: </label>
			<label><input type="radio" name="Jenis_Kendaraan" value="Mobil"> Mobil</label>
			<label><input type="radio" name="Jenis_Kendaraan" value="Motor"> Motor</label>
		</p>
		<p>
			<input type="submit" value="Cari" name="cari" />
		</p>
	</form>
	</div>



	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Register berhasil!";
			} else {
				echo "Register gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body>
	
</body>

</html>

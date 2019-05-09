<?php
session_start();
?>

<!DOCTYPE html>
<html>
<style>
	<?php include 'style2.css'; ?>
</style>
<head>
	<title>Tambah Kantong Parkir</title>
</head>
<body>

<div class="kotakan">
	<div class="container">
		<a href='tampil-data1.php'>
		<img class="kotak"src='p bulat.png' width='70' height='70' title='Home' alt='pemarkir' border='none' /></a>
		<div class="loginregister">
			<a href='logoutpenyedia.php'>Logout</a>
				<?php
					$dbc=mysqli_connect('localhost','root','','parkour');
					$mail=$_SESSION['email'];
				?>
		</div>
	</div>

	<label><center><h3>Tambah Kantong Parkir</h3></center></label>

	<form action="insert.php" method="POST">
		<table class="k5">
			<tr>
				<td>Nama Kantong Parkir</td>
				<td>:</td>
				<td><input type="text" name="namakp" required /input></td>
			</tr>
			<tr>
				<td>Alamat Parkir</td>
				<td>:</td>
				<td><input type="text" name="alamatkp"required /input></td>
			</tr>
			<tr>
				<td>Nama Penanggung Jawab</td>
				<td>:</td>
				<td><input type="text" name="namapj"required /input></td>
			</tr>
			<tr>
				<td>Nomor Telepon Penanggung Jawab</td>
				<td>:</td>
				<td><input type="number" name="nohppj"required /input></td>
			</tr>
			<tr>
				<td>Harga Isidental</td>
				<td>:</td>
				<td><input type="number" name="hargaisidental"required /input></td>
			</tr>
			<tr>
				<td>Harga 3 Hari</td>
				<td>:</td>
				<td><input type="number" name="hargatigahari" required /input></td>
			</tr>
			<tr>
				<td>Harga Seminggu</td>
				<td>:</td>
				<td><input type="number" name="hargaseminggu" required /input></td>
			</tr>
			<tr>
				<td colspan="3"> 
					<center><input class="tombol"type="submit" name="kirim" value="SIMPAN"></center>
				</td>
			</tr>
		</table>
	</form>
	<br>
	<br>
	<footer class="footer">Copyright©PARKOUR 2019 </footer>
</div>
</body>
</html>
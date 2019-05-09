<?php
session_start();
?>

<!DOCTYPE html>
<html>
<style>
	<?php include 'style2.css'; ?>
</style>
<head>
	<title>Ubah Data</title>
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

	

	<?php
		$dbc=mysqli_connect('localhost','root','','parkour');;

		$ide = $_GET["rubah_id"];

		$mum = mysqli_query($dbc, "SELECT * FROM kantongparkir WHERE id='$ide'") or die (mysqli_error());

		if(mysqli_num_rows($mum) > 0){
			$data = mysqli_fetch_array($mum);
		}
	?>

	<form action="update.php" method="POST">

	<input type="hidden" name="id" value="<?php echo $data["id"];?>">

		<table class="k5">
			<label><center><h3>Ubah Data</h3></center></label>
			<tr>
				<td>Nama Kantong Parkir</td>
				<td>:</td>
				<td><input type="text" name="namakp" value="<?php echo $data["namakp"];?>"required /input></td>
			</tr>
			<tr>
				<td>Alamat Parkir</td>
				<td>:</td>
				<td><input type="text" name="alamatkp" value="<?php echo $data["alamatkp"];?>"required /input></td>
			</tr>
			<tr>
				<td>Nama Pemnanggung Jawab</td>
				<td>:</td>
				<td><input type="text" name="namapj" value="<?php echo $data["namapj"];?>"required /input></td>
			</tr>
			<tr>
				<td>No Telepon Penanggung Jawab</td>
				<td>:</td>
				<td><input type="number" name="nohppj" value="<?php echo $data["nohppj"];?>"required /input></td>
			</tr>
			<tr>
				<td>Harga Isidental</td>
				<td>:</td>
				<td><input type="number" name="hargaisidental" value="<?php echo $data["hargaisidental"];?>"required /input></td>
			</tr>
			<tr>
				<td>Harga 3 Hari</td>
				<td>:</td>
				<td><input type="number" name="hargatigahari" value="<?php echo $data["hargatigahari"];?>" required /input></td>
			</tr>
			<tr>
				<td>Harga Seminggu</td>
				<td>:</td>
				<td><input type="number" name="hargaseminggu" value="<?php echo $data["hargaseminggu"];?>"required /input></td>
			</tr>
			<tr>
				<td colspan="3">
					<center><input class="tombol"type="submit" name="edit" value="SIMPAN"></center>
				</td>
			</tr>
		</table>
		<br>
		<br>
	</form>
<footer class="footer">Copyright©PARKOUR 2019 </footer>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Rubah Data</title>
</head>
<body>
	<h3>Rubah Data</h3>

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

		<table>
			<tr>
				<td>Nama Kantong Parkir</td>
				<td>:</td>
				<td><input type="text" name="namakp" value="<?php echo $data["namakp"];?>"></td>
			</tr>
			<tr>
				<td>Alamat Parkir</td>
				<td>:</td>
				<td><input type="text" name="alamatkp" value="<?php echo $data["alamatkp"];?>"></td>
			</tr>
			<tr>
				<td>Email Penyedia</td>
				<td>:</td>
				<td><input type="text" name="email" value="<?php echo $data["emailpenyedia"];?>"></td>
			</tr>
			<tr>
				<td>Nama Pemnanggung Jawab</td>
				<td>:</td>
				<td><input type="text" name="namapj" value="<?php echo $data["namapj"];?>"></td>
			</tr>
			<tr>
				<td>No Telepon Penanggung Jawab</td>
				<td>:</td>
				<td><input type="text" name="nohppj" value="<?php echo $data["nohppj"];?>"></td>
			</tr>
			<tr>
				<td>Harga Isidental</td>
				<td>:</td>
				<td><input type="text" name="hargaisidental" value="<?php echo $data["hargaisidental"];?>"></td>
			</tr>
			<tr>
				<td>Harga 3 Hari</td>
				<td>:</td>
				<td><input type="text" name="hargatigahari" value="<?php echo $data["hargatigahari"];?>"></td>
			</tr>
			<tr>
				<td>Harga Seminggu</td>
				<td>:</td>
				<td><input type="text" name="hargaseminggu" value="<?php echo $data["hargaseminggu"];?>"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="edit" value="RUBAH">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>
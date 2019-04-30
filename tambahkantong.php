
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kantong Parkir</title>
</head>
<body>
	<h3>Tambah Kantong Parkir</h3>

	<form action="insert.php" method="POST">
		<table>
			<tr>
				<td>Nama Kantong Parkir</td>
				<td>:</td>
				<td><input type="text" name="namakp"></td>
			</tr>
			<tr>
				<td>Alamat Parkir</td>
				<td>:</td>
				<td><input type="text" name="alamatkp"></td>
			</tr>
			<tr>
				<td>Email Penyedia</td>
				<td>:</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>Nama Penanggung Jawab</td>
				<td>:</td>
				<td><input type="text" name="namapj"></td>
			</tr>
			<tr>
				<td>Nomor Telepon Penanggung Jawab</td>
				<td>:</td>
				<td><input type="text" name="nohppj"></td>
			</tr>
			<tr>
				<td>Harga Isidental</td>
				<td>:</td>
				<td><input type="text" name="hargaisidental"></td>
			</tr>
			<tr>
				<td>Harga 3 Hari</td>
				<td>:</td>
				<td><input type="text" name="hargatigahari"></td>
			</tr>
			<tr>
				<td>Harga Seminggu</td>
				<td>:</td>
				<td><input type="text" name="hargaseminggu"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td>
					<input type="submit" name="kirim" value="SIMPAN">
					<input type="reset" name="clear" value="BATAL">
				</td>
			</tr>
		</table>
	</form>

</body>
</html>
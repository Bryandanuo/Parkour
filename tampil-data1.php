<?php
session_start();
?>

<!DOCTYPE html>
<html>
<style>
	<?php include 'style.css'; ?>
</style>
<head>
	<title>Data Kantong Parkir</title>
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
	<br/>
	<center><label>Daftar Kantong Parkir</label></center>


				<?php
					$dbc=mysqli_connect('localhost','root','','parkour');
					$idh = $_SESSION['email'];
				?>

	<br>
	<div class="k4">
	<center><a class="tombol2" href='tambahkantong1.php'>+ TAMBAH KANTONG PARKIR</a></center>
	<br>
	<br>


	<table cellspacing='0'>
		<thead>
			<th>Nama Kantong Parkir</th>
			<th>Alamat Parkir</th>
			<th>Nama Penanggung Jawab</th>
			<th>No Telp Penanggung Jawab</th>
			<th>Harga Isidental</th>
			<th>Harga 3 Hari</th>
			<th>Harga Seminggu</th>
			<th colspan="3">Aksi</th>
		</thead>
		<tbody>
			<?php
				
		
				// query sql
				$dbc=mysqli_connect('localhost','root','','parkour');
				$dum = mysqli_query($dbc, "SELECT * FROM kantongparkir WHERE emailpenyedia='$idh'") or die (mysqli_error($dbc));


				while($data = mysqli_fetch_array($dum)){

					$id = $data["id"];
					$namakp = $data["namakp"];
					$alamat = $data["alamatkp"];
					$mail = $data["emailpenyedia"];
					$pj = $data["namapj"];
					$nohppj = $data["nohppj"];
					$isidental = $data["hargaisidental"];
					$tigahari = $data["hargatigahari"];
					$seminggu = $data["hargaseminggu"];
		
					echo "<tr>
							<td>$namakp</td>
							<td>$alamat</td>
							<td>$pj</td>
							<td>$nohppj</td>
							<td>$isidental</td>
							<td>$tigahari</td>
							<td>$seminggu</td>
							<td>
								<a href='rubah-data1.php?rubah_id=$id'>Ubah</a> |
								<a href='hapus-data1.php?hapus_id=$id'>Hapus</a> |
								<a href='konfirmpenyedia1.php?konfirm_id=$id'>Lihat Transaksi</a>
							</td>
						  </tr>";
				}
			?>

			
		</tbody>
	</table>
	<br>
	<br>
	</div>
<footer class="footer">Copyright©PARKOUR 2019 </footer>
</div>
</body>
</html>
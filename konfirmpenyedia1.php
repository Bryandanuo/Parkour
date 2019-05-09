<?php
session_start();
?>

<!DOCTYPE html>
<html>
<style>
	<?php include 'style.css'; ?>
</style>
<head>
	<title>Konfirmasi Pembayaran</title>
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

	<center><label><h3>Data Transaksi</h3></label>
	</center>


				<?php
					$dbc=mysqli_connect('localhost','root','','parkour');
					$idh = $_SESSION['email'];
					$idi = $_GET["konfirm_id"];
				?>



	<table class="k4"cellspacing='0'>
		<thead>
			<th>ID transaksi</th>
			<th>Pemesan</th>
			<th>Tanggal</th>
			<th>Jenis Langganan</th>
			<th>Jenis Kendaraan</th>
			<th>Biaya</th>
			<th>Gambar</th>
			<th>Status</th>
			<th colspan="1">Aksi</th>
		</thead>
		<tbody>
			<?php
				
		
				// query sql
				$dbc=mysqli_connect('localhost','root','','parkour');
				$dim=mysqli_query($dbc, "SELECT namakp FROM kantongparkir WHERE id='$idi'") or die (mysqli_error($dbc));

					while($data = mysqli_fetch_array($dim)){

	
					$namakp = $data["namakp"];
					}

				$dum = mysqli_query($dbc, "SELECT * FROM transaksiparkir WHERE namakantong='$namakp'") or die (mysqli_error($dbc));


				while($datu = mysqli_fetch_array($dum)){

					$id = $datu["idtrans"];
					$kp = $namakp;
					$pemesan = $datu["userid"];
					$tgl = $datu["tanggal"];
					$status = $datu["status"];
					$jk = $datu["jeniskendaraan"];
					$jl = $datu["jenislangganan"];
					$biaya = $datu["biaya"];
					$gambar = $datu["gambar"];
		
					echo "<tr>
							<td>$id</td>
							<td>$pemesan</td>
							<td>$tgl</td>
							<td>$jl</td>
							<td>$jk</td>
							<td>$biaya</td>
							<td><img class='image-style' src=$gambar></td>
							<td>$status</td>
							<td>
								<a href='konfirmproses.php?proses_id=$id'>Konfirmasi</a>
							</td>
						  </tr>";
				}
			?>

			
		</tbody>
	</table>
	<br>
	<br>
	<footer class="footer">Copyright©PARKOUR 2019 </footer>
</div>
</body>
</html>
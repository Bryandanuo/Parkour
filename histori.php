<?php
session_start();
?>

<!DOCTYPE html>
<html>
<style>
	<?php include 'style.css'; ?>
</style>
<head>
	<title>History Parkir</title>
</head>
<body>
<div class="kotakan">
	<div class="container">
		<a href='homepemarkir.php'>
		<img class="kotak"src='p bulat.png' width='70' height='70' title='Home' alt='pemarkir' border='none' /></a>
		<div class="loginregister">
			<a href='konfirmasipemarkir.php?konfirmasi_mail=$mail'>Form Konfirmasi Pembayaran</a> |
			<a href='histori.php?histori_mail=$mail'>History Pemesanan</a> |
			<a href='logoutpemarkir.php'>Logout</a>
				<?php
					$dbc=mysqli_connect('localhost','root','','parkour');
					$mail=$_SESSION['email'];
				?>
		</div>
	</div>
	<center><h1>Data History Pemesanan</h1></center>
	<br>
				<?php
					$dbc=mysqli_connect('localhost','root','','parkour');
					$idu = $_SESSION["email"];
					$idi = $_GET["histori_mail"];



				?>

	<table cellspacing='0'>
		<thead>
			<th>ID Transaksi</th>
			<th>Kantong Parkir</th>
			<th>Tanggal</th>
			<th>Jenis Langganan</th>
			<th>Jenis Kendaraan</th>
			<th>Biaya</th>
			<th>Status</th>

		</thead>
		<tbody>
			<?php
				
		
				// query sql
				$dbc=mysqli_connect('localhost','root','','parkour');
				$dum = mysqli_query($dbc, "SELECT * FROM transaksiparkir WHERE userid='$idu'") or die (mysqli_error());


				while($data = mysqli_fetch_array($dum)){

					$id = $data["idtrans"];
					$userid = $data["userid"];
					$namakp = $data["namakantong"];
					$jl = $data["jenislangganan"];
					$jk = $data["jeniskendaraan"];
					$biaya = $data["biaya"];
					$tgl = $data["tanggal"];
					$status = $data["status"];

		
					echo "<tr>
							<td>$id</td>
							<td>$namakp</td>
							<td>$tgl</td>
							<td>$jl</td>
							<td>$jk</td>
							<td>$biaya</td>
							<td>$status</td>
						  </tr>";
				}
			?>

			
		</tbody>
	</table>
<footer class="footer">Copyright©PARKOUR 2019 </footer>
</div>
</body>
</html>
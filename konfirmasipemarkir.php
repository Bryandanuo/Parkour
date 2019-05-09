<?php
session_start();
?>

<!DOCTYPE html>
<html>
<style>
	<?php include 'style.css'; ?>
</style>
<head>
	<title>Parkour|Cara Mudah, Cari Parkir</title>
</head>

<body>
	<header>
	</header>
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
	<div class="k1">
	<form action="prosesunggah.php" method="POST" enctype="multipart/form-data"> 			
		<div class="k2">
			<label>Masukkan ID transaksi anda:</label>
			<label><input type="number" name="idtrans" placeholder="Masukkan ID Transaksi Anda" required / input></label>
			<label>Foto Bukti Pembayaran:</label>
			<label><input type="file" name="gambar" required /input></label>
			<label><input class="tombol" type="submit" name="submit" value="Upload"/></label>
		</div>
	</form>
	<br/>
	<?php
	echo "Catatan : ID transaksi dapat dilihat di halaman Histori Pemarkir"
	?>
	</div>
<footer class="footer">Copyright©PARKOUR 2019 </footer>
</div>
</body>
</html>



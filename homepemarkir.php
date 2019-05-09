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
		<img class="logo"src="parkour.png">

	<div class="isi">
	<form action="checkout.php" method="POST">



			<p>
				<label for="kp">Kantong Parkir: </label>
				<div class="kp">
				<select name="kp">
				<?php
					$dbc=mysqli_connect('localhost','root','','parkour');;
					$query = "select namakp from kantongparkir";
					$hasil = mysqli_query($dbc,$query);
					while ($qtabel = mysqli_fetch_assoc($hasil))
					{
					echo '<option value="'.$qtabel['namakp'].'">'.$qtabel['namakp'].'</option>';
					}
				?>
			</select>
			</div>
			</p>
			<p>
				<label for="jenislangganan">Jenis Langganan: </label>
				<div class="kp">
				<select name="jenislangganan">
				<option value="Isidental">Isidental</option>
				<option value="Tiga Hari">Tiga Hari</option>
				<option value="Seminggu">Seminggu</option>
		        </select>
		    	</div>
			</p>
			<p>
				<label  for="tgl">Tanggal: </label>
				<label><input class="kp" type="datetime-local" name="tgl" required / input></label>
			</p>
			<p>
				<label for="jeniskendaraan">Jenis Kendaraan: </label>
				<label><input type="radio" name="jeniskendaraan" value="Mobil" required / input> Mobil</label>
				<label><input type="radio" name="jeniskendaraan" value="Motor" required/input> Motor</label>
			</p>
			<p>
				<input class="tombol" type="submit" value="Cari Parkir!" name="pesan" />
			</p>
		</form>
		</div>
	<div class="ctt"><?php 
echo "*Jika Anda memilih Isidental sebagai jenis langganan, maka biaya yang dikenakan adalah biaya perjam."
	?>
	</div>
	<div class="footer">Copyright©PARKOUR 2019 </div>
	</div>
	</body>
</html>

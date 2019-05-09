<!DOCTYPE html>
<html>
<style>
	<?php include 'style.css'; ?>
</style>
<head>
	<title class="h1">Parkour|Cara Mudah, Cari Parkir</title>
</head>

<body>	
	<div class="kotakan">
		<div class="container">
		<a href='index.php'>
		<img class="kotak"src='p bulat.png' width='70' height='70' title='daftar sebagai pemarkir' alt='pemarkir' border='none' /></a>
		<div class="loginregister">
			<a href="formregister.php">Register</a> |
			<a href="formloginsemua1.php">Login</a>	
		</div>
		</div>
		<img class="logo"src="parkour.png">
		<div class="isi">
		<form action="logindulu.php" method="POST">



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
				<input class="tombol" type="submit" value="Cari Parkir!" name="cari" />
			</p>
		</form>
		</div>
		<div class="deskripsi"><h2>Apa itu PARKOUR?</h2>
		<h4>PARKOUR adalah aplikasi buatan mahasiswa tingkat dua yang baru belajar coding dimana aplikasi ini akan memudahkan anda untuk melakukan pemesanan parkir serta membuka lahan parkir yang anda miliki. Karena pengembang masih dalam tingakt dua, harap dimaklumi atas segala kesalahan yang ada di dalam aplikasi.</h4>
		</div>
		<div class="footer">Copyright©PARKOUR 2019 </div>
	</div>

	</body>
</html>
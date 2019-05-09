<!DOCTYPE html>
<html>
<style>
	<?php include 'style.css'; ?>
</style>
<head>
	<title class="h1">Parkour|Cara Mudah, Cari Parkir</title>
</head>

<body>
<div class="trans"></div>	
<div class="kotakan">

		<div class="container">
		<a href='index.php'>
		<img class="kotak"src='p bulat.png' width='80' height='80' title='daftar sebagai pemarkir' alt='pemarkir' border='none' /></a>
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
				<option selected="selected">Kantong Parkir</option>
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
				<label for="Jenis_Langganan">Jenis Langganan: </label>
				<div class="kp">
				<select name="Jenis_Langganan">
				<option value="Isidental">Isidental</option>
				<option value="Tiga Hari">Tiga Hari</option>
				<option value="Seminggu">Seminggu</option>
				<option value="Sebulan">Sebulan</option>
		        </select>
		    	</div>
			</p>
			<p>
				<label for="tgl">Tanggal: </label>
				<label><input type="datetime-local" name="tgl"></label>
			</p>
			<p>
				<label for="jenislangganan">Jenis Langganan: </label>
				<div class="jenislangganan">
				<select name="jenislangganan">
				<option selected="selected">Jenis Langganan</option>
				<option value="isidental">Isidental</option>
				<option value="tigahari">Tiga Hari</option>
				<option value="seminggu">Seminggu</option>
	        	</select>
	        	</div>
			</p>
			<p>
				<label for="jeniskendaraan">Jenis Kendaraan: </label>
				<label><input type="radio" name="jeniskendaraan" value="Mobil"> Mobil</label>
				<label><input type="radio" name="jeniskendaraan" value="Motor"> Motor</label>
			</p>
			<p>
				<input class="tombol" type="submit" value="Cari Parkir!" name="cari" />
			</p>
		</form>
		</div>
		<div class="deskripsi"><h2>Apa itu PARKOUR?</h2>
		<h4>PARKOUR adalah aplikasi buatan mahasiswa tingkat dua yang baru belajar coding dimana aplikasi ini akan memudahkan anda untuk melakukan pemesanan parkir serta membuka lahan parkir yang anda miliki. Karena pengembang masih dalam tingakt dua, harap dimaklumi atas segala kesalahan yang ada di dalam aplikasi.</h4>
		</div>
		<div class="footer">Copyright © 2019 </div>
	</div>




	<div id="popup">
    <div class="window">
        <a href="#" class="close-button" title="Close">X</a>
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Register berhasil!";
			} else {
				echo "Register gagal!";
			}
		?>
	</p>
	<?php endif; ?>
	</div>
	</div>

	</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.33" />
</head>

<body>
	
</body>

</html>

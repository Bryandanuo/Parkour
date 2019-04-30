<!DOCTYPE html>
<html>
<head>
	<title>Parkour|Cara Mudah, Cari Parkir</title>
</head>

<body>
	<header>
		<h1>Parkour</h1>
		<h3>Cara Mudah, Cari Parkir</h3>
	</header>
<a href='index.php'>Logout</a>
<br>

<br>

				<?php
					$dbc=mysqli_connect('localhost','root','','parkour');
					$idh = $_GET["homepemarkir_mail"];
				?>

<a href='histori.php'>History Pemesanan</a>

	
	<form action="checkout.php" method="POST">

		<fieldset>
		<p>
			<label for="mail">Email Anda yang sudah terdaftar: </label>
			<input type="text" name="mail" placeholder="Email Anda" />
		</p>
		<p>
			<label for="kp">Kantong Parkir: </label>
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
		</p>
		<p>
			<label for="tgl">Tanggal: </label>
			<select name="tgl">
			<option selected="selected">Tanggal</option>
			<?php
				for($a=1; $a<=31; $a+=1){
    			echo"<option value=$a> $a </option>";
				}
			?>
			</select>
		</p>
		<p>
			<label for="bln">Bulan: </label>
			<select name="bln">
			<option selected="selected">Bulan</option>
			<?php
				$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
				$jlh_bln=count($bulan);
				for($c=0; $c<$jlh_bln; $c+=1){
			    echo"<option value=$bulan[$c]> $bulan[$c] </option>";
				}
			?>
			</select>
		</p>
		<p>
			<label for="thn">Tahun:</label>
			<select name="thn">
			<option selected="selected">Tahun</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
	        </select>
		</p>
			</select>
		</p>
		<p>
			<label for="jenislangganan">Jenis Langganan: </label>
			<select name="jenislangganan">
			<option selected="selected">Jenis Langganan</option>
			<option value="isidental">Isidental</option>
			<option value="tigahari">Tiga Hari</option>
			<option value="seminggu">Seminggu</option>
	        </select>
		</p>
		<p>
			<label for="jeniskendaraan">Jenis Kendaraan: </label>
			<label><input type="radio" name="jeniskendaraan" value="Mobil"> Mobil</label>
			<label><input type="radio" name="jeniskendaraan" value="Motor"> Motor</label>
		</p>
		<p>
			<input type="submit" value="Pesan" name="pesan" />
		</p>
		</fieldset>
	</form>


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

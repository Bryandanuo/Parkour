<!DOCTYPE html>
<html>
<head>
	<title>Data Kantong Parkir</title>
</head>
<body>
<a href='index.php'>Logout</a>
	<h3>Daftar Kantong Parkir</h3>


				<?php
					$dbc=mysqli_connect('localhost','root','','parkour');
					$idh = $_GET["tampil-data_mail"];
				?>

	<a href='tambahkantong.php'>+ TAMBAH KANTONG PARKIR</a>


	<table border="1">
		<thead>
			<th>Nama Kantong Parkir</th>
			<th>Alamat Parkir</th>
			<th>Email Penyedia</th>
			<th>Nama Penanggung Jawab</th>
			<th>No Telp Penanggung Jawab</th>
			<th>Harga Isidental</th>
			<th>Harga 3 Hari</th>
			<th>Harga Seminggu</th>
			<th colspan="2">Aksi</th>
		</thead>
		<tbody>
			<?php
				
		
				// query sql
				$dbc=mysqli_connect('localhost','root','','parkour');
				$dum = mysqli_query($dbc, "SELECT * FROM kantongparkir") or die (mysqli_error($dbc));


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
							<td>$mail</td>
							<td>$pj</td>
							<td>$nohppj</td>
							<td>$isidental</td>
							<td>$tigahari</td>
							<td>$seminggu</td>
							<td>
								<a href='rubah-data.php?rubah_id=$id'>Rubah</a>
								<a href='hapus-data.php?hapus_id=$id'>Hapus</a>
							</td>
						  </tr>";
				}
			?>

			
		</tbody>
	</table>

</body>
</html>
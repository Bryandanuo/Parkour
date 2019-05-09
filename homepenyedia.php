<!DOCTYPE html>
<html>
<head>
	<title>Parkour|Cara Mudah, Cari Parkir</title>
</head>

<body>
	<header>
		<h2>Data Kantong Parkir</h2>
	</header>

	<a href="tambahkantong.php">+ TAMBAH KANTONG PARKIR</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Kantong Parkir</th>
			<th>Opsi</th>
		</tr>
		<?php
		$dbc=mysqli_connect('localhost','root','','parkour');;
		$no=1;
		$data = mysqli_query($dbc, "select namakp from kantongparkir");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id']; ?>">Edit</a>
					<a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>
	
	
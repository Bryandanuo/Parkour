<!DOCTYPE html>
<html>
<head>
	<title>Parkour|Cara Mudah, Cari Parkir</title>
</head>

<body>
	<header>
		<h2>Data Kantong Parkir</h2>
	</header>

	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan'] == "berhasil"){
			echo '$email';
		}else if($_GET['pesan'] == "logout"){
			echo "Anda telah berhasil logout!";
		}else if($_GET['pesan'] == "belum_login"){
			echo "Silakan login terlebih dahulu";
		}
	}
	?>

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
		$dbc=mysqli_connect('localhost','root','','parkour');
		$no=1;
		$data=mysqli_query($dbc,"select namakp from kantongparkir where email = '$email'");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++;?></td>
				<td><?php echo $d['email'];?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['id'];?>">EDIT</a>"
					<a href="hapus.php?id=<?php echo $d['id'];?>">HAPUS</a>"
				</td>
			</tr>
			<?php
		}
		?>
	</table>
</body>
</html>
	
	
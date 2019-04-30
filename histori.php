<!DOCTYPE html>
<html>
<head>
	<title>History Parkir</title>
</head>
<body>
	<h3>Data History Parkirr</h3>


	<table border="1">
		<thead>
			<th>ID Transaksi</th>
			<th>Email Pengguna</th>
			<th>Tanggal</th>
			<th>Jenis Langganan</th>
			<th>Jenis Kendaraan</th>
			<th>Biaya</th>

		</thead>
		<tbody>
			<?php
				
		
				// query sql
				$dbc=mysqli_connect('localhost','root','','parkour');
				$dum = mysqli_query($dbc, "SELECT * FROM transaksiparkir") or die (mysqli_error());


				while($data = mysqli_fetch_array($dum)){

					$id = $data["idtrans"];
					$userid = $data["userid"];
					$namakp = $data["namakantong"];
					$jl = $data["jenislangganan"];
					$jk = $data["jeniskendaraan"];
					$biaya = $data["biaya"];
					$tgl = $data["tanggal"];

		
					echo "<tr>
							<td>$id</td>
							<td>$userid</td>
							<td>$tgl</td>
							<td>$jl</td>
							<td>$jk</td>
							<td>$biaya</td>
						  </tr>";
				}
			?>

			
		</tbody>
	</table>

<a href='homepemarkir.php?homepemarkir_mail='$userid''>Kembali</a>

</body>
</html>
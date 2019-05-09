<?php
session_start();

					$dbc=mysqli_connect('localhost','root','','parkour');
					$idh = $_SESSION['email'];
					$idi = $_GET["proses_id"];




				$dim=mysqli_query($dbc, "SELECT * FROM transaksiparkir WHERE idtrans='$idi'") or die (mysqli_error($dbc));

					while($data = mysqli_fetch_array($dim)){

	
					$status= $data["status"];
					}

if ($status == "Menunggu Konfirmasi"){
	$new = "Sudah Dikonfirmasi";
	$quer = "UPDATE transaksiparkir SET status='$new' WHERE idtrans='$idi'";
	$query = mysqli_query($dbc, $quer);
	if($query){
	echo "Transaksi Berhasil Dikonfirmasi";
	}
}
else if ($status == "Menunggu Pengiriman Bukti Pembayaran"){
	echo "Bukti Pembayaran dari Pemarkir Belum Dikirim";
}	
else if ($status == "Sudah Dikonfirmasi"){
	echo "Transaksi ini sudah Anda konfirmasi";
}
?>



	
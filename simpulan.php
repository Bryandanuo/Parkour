<?php
if (isset($_POST['cari'])) {$Kantong_parkir, $Jenis_langganan, $Jenis_kendaraan = $_POST['Kantong_Parkir', 'Jenis_Langganan', 'Jenis_Kendaraan'];
	echo "Lokasi yang Anda pilih :" .$Kantong_parkir <br> "Jenis Langganan :" .$Jenis_langganan <br> "Jenis Kendaraan :" .$Jenis_kendaraan
?>

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

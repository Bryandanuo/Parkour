<!DOCTYPE html>
<html>
<head>
	<title>Summary Pesanan Anda</title>
</head>
<body>
<h3>Data Pemesanan Anda :</h3>
<?php
$dbc=mysqli_connect('localhost','root','','parkour');
if(isset($_POST['pesan'])){
	$email = $_POST['mail'];
	$kp = $_POST['kp'];
	$tgl = $_POST['tgl'];
	$bln = $_POST['bln'];
	$thn = $_POST['thn'];
	$mhm = "$tgl-$bln-$thn";
	$mulai = date('Y F d', strtotime($mhm));
	$jk = $_POST['jeniskendaraan'];
	$jl = $_POST['jenislangganan'];
}
echo 	"Email Anda:".$email."<br>";
echo 	"Nama kantong parkir :".$kp."<br>";
echo	"Jenis langganan :".$jl."<br>";
echo	"Jenis kendaraan :".$jk."<br>";
echo	"Tanggal mulai :".$mhm."<br>";

	$sql = "SELECT * FROM kantongparkir WHERE namakp = '$kp'";
	$harga = mysqli_query($dbc,$sql);
	while ($qta = mysqli_fetch_array($harga))
					{
					$namakp = $qta["namakp"];
					$alamat = $qta["alamatkp"];
					$pj = $qta["namapj"];
					$nohppj = $qta["nohppj"];
					$isidental = $qta["hargaisidental"];
					$tigahari = $qta["hargatigahari"];
					$seminggu = $qta["hargaseminggu"];
				}

if($jl =='isidental'){
	$biaya = $isidental;}
elseif($jl == "tigahari"){
	$biaya = $tigahari;}
elseif($jl == 'seminggu'){
	$biaya = $seminggu;}

echo	"Harga :".$biaya."<br>";

$sq = "INSERT INTO transaksiparkir (userid, namakantong, jenislangganan, tanggal, jeniskendaraan, biaya) VALUES('$email', '$kp','$jl', '$mulai', '$jk', '$biaya')";
$quer = mysqli_query($dbc, $sq) or die (mysqli_error($dbc));

	if($quer){
		echo "Pemesanan berhasil disimpan";

	} else {
		echo "Error :".$sq."<br>".mysqli_error($dbc);
	}

?>
<br>
<br>

<a href='homepemarkir.php?homepemarkir_mail='$email''>Kembali</a>






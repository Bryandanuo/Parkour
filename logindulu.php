<!DOCTYPE html>
<html>
<style>
	<?php include 'style.css'; ?>
</style>
<head>
	<title>Summary Pesanan Anda</title>
</head>
<body>
<div class="kotakan">
	<div class="container">
		<a href='index.php'>
		<img class="kotak"src='p bulat.png' width='70' height='70' title='daftar sebagai pemarkir' alt='pemarkir' border='none' /></a>
	</div>
<h3>Data Pemesanan Anda :</h3>
<?php
$dbc=mysqli_connect('localhost','root','','parkour');
if(isset($_POST['cari'])){

	$kp = $_POST['kp'];
	$tglblm = $_POST['tgl'];
	$jk = $_POST['jeniskendaraan'];
	$jl = $_POST['jenislangganan'];
}

echo 	"Nama kantong parkir :".$kp."<br>";
echo	"Jenis langganan :".$jl."<br>";
echo	"Jenis kendaraan :".$jk."<br>";
echo	"Tanggal mulai :".$tglblm."<br>";

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

if($jl =='Isidental'){
	$biaya = $isidental;}
elseif($jl == "Tiga Hari"){
	$biaya = $tigahari;}
elseif($jl == 'Seminggu'){
	$biaya = $seminggu;}

echo	"Harga :".$biaya."<br>";


?>
<br>
<br>

<h3>Anda Perlu Login untuk Menyimpan Pesanan</h3>


<footer class="footer">Copyright©PARKOUR 2019 </footer>
</div>
</body>

</html>






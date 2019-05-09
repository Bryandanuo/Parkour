<?php
session_start();

	$dbc=mysqli_connect('localhost','root','','parkour');


	$id = $_POST["id"];
	$namakp = $_POST["namakp"];
	$mail = $_SESSION['email'];
	$alamat = $_POST["alamatkp"];
	$pj = $_POST["namapj"];
	$nopj = $_POST["nohppj"];
	$isidental = $_POST["hargaisidental"];
	$tigahari = $_POST["hargatigahari"];
	$seminggu = $_POST["hargaseminggu"];


	$sql = "UPDATE kantongparkir SET namakp='$namakp', alamatkp='$alamat', emailpenyedia='$mail', namapj='$pj', nohppj='$nopj', hargaisidental='$isidental', hargatigahari='$tigahari', hargaseminggu='$seminggu' WHERE id='$id'";


	$query = mysqli_query($dbc, $sql) or die (mysqli_error());

	if($query){
		header("location:tampil-data1.php?tampil-data_mail='$email'");
	} else {
		echo "Error".$sql."<br>".mysqli_error($dbc);
	}

	mysqli_close($dbc);

?>
<?php
session_start();

	$dbc=mysqli_connect('localhost','root','','parkour');

	$namakp = $_POST["namakp"];
	$alamat = $_POST["alamatkp"];
	$email = $_SESSION['email'];
	$pj = $_POST["namapj"];
	$nopj = $_POST["nohppj"];
	$isidental = $_POST["hargaisidental"];
	$tigahari = $_POST["hargatigahari"];
	$seminggu = $_POST["hargaseminggu"];


	// query sql
	$sql = "INSERT INTO kantongparkir (namakp, alamatkp, emailpenyedia, namapj, nohppj, hargaisidental, hargatigahari, hargaseminggu) VALUES('$namakp', '$alamat', '$email', '$pj', '$nopj', '$isidental', '$tigahari', '$seminggu')";
	$query = mysqli_query($dbc, $sql) or die (mysqli_error());

	if($query){
		header("location:tampil-data1.php?tampil-data_mail='$email'");

	} else {
		echo "Error :".$sql."<br>".mysqli_error($dbc);
	}

	mysqli_close($dbc);

?>
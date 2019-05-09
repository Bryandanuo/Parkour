<?php
session_start();

	$dbc=mysqli_connect('localhost','root','','parkour');

	$idh = $_GET["hapus_id"];

	// query sql
	$sql = "DELETE FROM kantongparkir WHERE id='$idh'";
	$query = mysqli_query($dbc, $sql) or die (mysqli_error());

	if($query){
		header("location:tampil-data1.php?tampil-data_mail='$email'");
	} else {
		echo "Error :".$sql."<br>".mysqli_error($dbc);
	}

	mysqli_close($dbc);
?>
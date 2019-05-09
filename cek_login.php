<?php
session_start();
$dbc=mysqli_connect('localhost','root','','parkour');
$email = $_POST['username'];
$password = md5($_POST['password']);


$data = mysqli_query($dbc,"SELECT * FROM pemarkir WHERE emailpemarkir='$email' AND password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
	header("location:homepemarkir.php?homepemarkir_mail='$email'");


}else{
	echo "Login Gagal";
}
?>
<?php
$dbc=mysqli_connect('localhost','root','','parkour');
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	// buat query
  $query = mysqli_query($dbc,"INSERT INTO pemarkir (emailpemarkir, username, password) VALUEs ('$email', '$nama', '$password')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		echo "Akun Gagal Dibuat";
	}


} else {
	die("Akses dilarang...");
}
?>

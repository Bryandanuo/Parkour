<?php
$dbc=mysqli_connect('localhost','root','','parkour');
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$bank = $_POST['bank'];
	$norek = $_POST['norek'];
	$noreknama = $_POST['noreknama'];

	// buat query
  $query = mysqli_query($dbc,"INSERT INTO penyedia (email, nama, password, norek, norekname, bank) VALUEs ('$email', '$nama', '$password', '$norek', '$noreknama', '$bank')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: index.php');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		echo "Register Gagal";	}


} else {
	die("Akses dilarang...");
}
?>

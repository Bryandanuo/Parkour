<?php
session_start();
$dbc=mysqli_connect('localhost','root','','parkour');


	// ambil data dari formulir
	$id = $_POST['idtrans'];
	$foto = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];
	$status = "Menunggu Konfirmasi";
		$ukuranfile = $_FILES['gambar']['size'];
	$tipefile = $_FILES['gambar']['type'];
	$status = "Menunggu Konfirmasi";


$path = "file/".$foto;

if($tipefile == "image/jpeg" || $tipefile == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
  // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
  if($ukuranfile <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
    // Proses upload
    if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :  
      // Proses simpan ke Database
      $quer = "UPDATE transaksiparkir SET gambar='$path', status='$status' WHERE idtrans='$id'";
      $sql = mysqli_query($dbc, $quer); // Eksekusi/ Jalankan query dari variabel $query
      
      if($sql){ // Cek jika proses simpan ke database sukses atau tidak
        // Jika Sukses, Lakukan :
        header("location: homepemarkir.php"); // Redirectke halaman index.php
      }else{
        // Jika Gagal, Lakukan :
        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      }
    }else{
      // Jika gambar gagal diupload, Lakukan :
      echo "Maaf, Gambar gagal untuk diupload.";
    }
  }else{
    // Jika ukuran file lebih dari 1MB, lakukan :
    echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
  }
}else{
  // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
  echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
}


?>
<?php
// Load file koneksi.php
//include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$namagambarberanda = $_FILES['gambarberandaportofolio']['name'];
$errorgambarberanda = $_FILES['gambarberandaportofolio']['error'];
$tmp_fileberanda = $_FILES['gambarberandaportofolio']['tmp_name'];
	
	if ($errorgambar == 0) {
		move_uploaded_file($tmp_fileberanda, "images/gambarberandaportofolio.jpg");

	}
		header("location: indexadmin.php");

$namagambarberanda2 = $_FILES['gambarberandaportofolio2']['name'];
$errorgambarberanda2 = $_FILES['gambarberandaportofolio2']['error'];
$tmp_fileberanda2 = $_FILES['gambarberandaportofolio2']['tmp_name'];
	
	if ($errorgambarberanda2 == 0) {
		move_uploaded_file($tmp_fileberanda2, "images/gambarberandaportofolio2.jpg");

	}
		header("location: indexadmin.php");

$namagambarberanda3 = $_FILES['gambarberandaportofolio3']['name'];
$errorgambarberanda3 = $_FILES['gambarberandaportofolio3']['error'];
$tmp_fileberanda3 = $_FILES['gambarberandaportofolio3']['tmp_name'];
	
	if ($errorgambarberanda3 == 0) {
		move_uploaded_file($tmp_fileberanda3, "images/gambarberandaportofolio3.jpg");

	}
		header("location: indexadmin.php");

$namagambarberanda4 = $_FILES['gambarberandaportofolio4']['name'];
$errorgambarberanda4 = $_FILES['gambarberandaportofolio4']['error'];
$tmp_fileberanda4 = $_FILES['gambarberandaportofolio4']['tmp_name'];
	
	if ($errorgambarberanda4 == 0) {
		move_uploaded_file($tmp_fileberanda4, "images/gambarberandaportofolio4.jpg");

	}
		header("location: indexadmin.php");

?>


<?php
// Load file koneksi.php
//include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$namagambar = $_FILES['gambarberandaportofolio']['name'];
$errorgambar = $_FILES['gambarberandaportofolio']['error'];
$tmp_file = $_FILES['gambarberandaportofolio']['tmp_name'];

$namagambar2 = $_FILES['gambarberandaportofolio2']['name'];
$errorgambar2 = $_FILES['gambarberandaportofolio2']['error'];
$tmp_file2 = $_FILES['gambarberandaportofolio2']['tmp_name'];

$namagambar3 = $_FILES['gambarberandaportofolio3']['name'];
$errorgambar3 = $_FILES['gambarberandaportofolio3']['error'];
$tmp_file3 = $_FILES['gambarberandaportofolio3']['tmp_name'];

$namagambar4 = $_FILES['gambarberandaportofolio4']['name'];
$errorgambar4 = $_FILES['gambarberandaportofolio4']['error'];
$tmp_file4 = $_FILES['gambarberandaportofolio4']['tmp_name'];
    // Proses upload
    if($errorgambar == 0){ // Cek apakah gambar berhasil diupload atau tidak
      // Jika gambar berhasil diupload, Lakukan :
      move_uploaded_file($tmp_file, "images/gambarberandaportofolio.jpg");

      move_uploaded_file($tmp_file2, "images/gambarberandaportofolio2.jpg");

      move_uploaded_file($tmp_file3, "images/gambarberandaportofolio3.jpg");

      move_uploaded_file($tmp_file4, "images/gambarberandaportofolio4.jpg");

      header("location: indexadmin.php"); 
    }
?>

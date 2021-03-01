<?php
// Load file koneksi.php
//include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$namagambar = $_FILES['gambar']['name'];
$errorgambar = $_FILES['gambar']['error'];
$tmp_file = $_FILES['gambar']['tmp_name'];
	
	if ($errorgambar == 0) {
		move_uploaded_file($tmp_file, "images/gambar.jpg");

	}
		header("location: donasiadmin.php");

$namagambar2 = $_FILES['gambar2']['name'];
$errorgambar2 = $_FILES['gambar2']['error'];
$tmp_file2 = $_FILES['gambar2']['tmp_name'];
	
	if ($errorgambar2 == 0) {
		move_uploaded_file($tmp_file2, "images/gambar2.jpg");

	}
		header("location: donasiadmin.php");

$namagambar3 = $_FILES['gambar3']['name'];
$errorgambar3 = $_FILES['gambar3']['error'];
$tmp_file3 = $_FILES['gambar3']['tmp_name'];
	
	if ($errorgambar3 == 0) {
		move_uploaded_file($tmp_file3, "images/gambar3.jpg");

	}
		header("location: donasiadmin.php");

$namagambar4 = $_FILES['gambar4']['name'];
$errorgambar4 = $_FILES['gambar4']['error'];
$tmp_file4 = $_FILES['gambar4']['tmp_name'];
	
	if ($errorgambar4 == 0) {
		move_uploaded_file($tmp_file4, "images/gambar4.jpg");

	}
		header("location: donasiadmin.php");

?>

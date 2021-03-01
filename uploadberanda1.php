<?php
// Load file koneksi.php
//include "koneksi.php";
// Ambil Data yang Dikirim dari Form
$namagambarberandah = $_FILES['gambarberandahead']['name'];
$errorgambarberandah = $_FILES['gambarberandahead']['error'];
$tmp_fileberandah = $_FILES['gambarberandahead']['tmp_name'];
	
	if ($errorgambarberandah == 0) {
		move_uploaded_file($tmp_fileberandah, "images/gambarberandahead.jpg");

	}
		header("location: indexadmin.php");

$namagambarberandah2 = $_FILES['gambarberandahead2']['name'];
$errorgambarberandah2 = $_FILES['gambarberandahead2']['error'];
$tmp_fileberandah2 = $_FILES['gambarberandahead2']['tmp_name'];
	
	if ($errorgambarberandah2 == 0) {
		move_uploaded_file($tmp_fileberandah2, "images/gambarberandahead2.jpg");

	}
		header("location: indexadmin.php");

$namagambarberandah3 = $_FILES['gambarberandahead3']['name'];
$errorgambarberandah3 = $_FILES['gambarberandahead3']['error'];
$tmp_fileberandah3 = $_FILES['gambarberandahead3']['tmp_name'];
	
	if ($errorgambarberandah3 == 0) {
		move_uploaded_file($tmp_fileberandah3, "images/gambarberandahead3.jpg");

	}
		header("location: indexadmin.php");

$namagambarberandah4 = $_FILES['gambarberandahead4']['name'];
$errorgambarberandah4 = $_FILES['gambarberandahead4']['error'];
$tmp_fileberandah4 = $_FILES['gambarberandahead4']['tmp_name'];
	
	if ($errorgambarberandah4 == 0) {
		move_uploaded_file($tmp_fileberandah4, "images/gambarberandahead4.jpg");

	}
		header("location: indexadmin.php");

?>
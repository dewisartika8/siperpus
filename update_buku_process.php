<?php
	session_start();
	include_once 'functions.php';

	if(!isset($_SESSION['is_logged_in'])){
		redirect('login.php');
	}
	$kd_buku		= $_POST['kd_buku'];
	$judul_buku	= $_POST['judul_buku'];
	$pengarang 			= $_POST['pengarang'];
	$jenis_buku		= $_POST['jenis_buku'];
	$penerbit			= $_POST['penerbit'];

	$database = new mysqli('127.0.0.1','root','','perpustakaan');
	$query = "UPDATE buku SET kd_buku='$kd_buku', judul_buku='$judul_buku', pengarang = '$pengarang', jenis_buku = '$jenis_buku', penerbit = '$penerbit' WHERE kd_buku='$kd_buku'";
	$statement = $database->prepare($query);
	$statement->execute();
	redirect('buku.php');
	
?>	
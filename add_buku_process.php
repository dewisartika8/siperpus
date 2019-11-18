<?php
	session_start();
	include_once('functions.php');
	// when no session named 'is_logged_in'?
	if (!isset($_SESSION['is_logged_in'])) {
		redirect('login.php');
	}
	// retrieve posted form data
	$kd_buku = $_POST['kd_buku'];
	$judul_buku = $_POST['judul_buku'];
	$pengarang = $_POST['pengarang'];
	$jenis_buku = $_POST['jenis_buku'];
	$penerbit = $_POST['penerbit'];

	$database = new mysqli('127.0.0.1', 'root', '', 'perpustakaan');
	$query = 'INSERT INTO buku(`kd_buku`,  `judul_buku`, `pengarang`, `jenis_buku`, `penerbit`) VALUES(?, ?, ?, ?, ?)';
	$statement = $database->prepare($query);
	$statement->bind_param('issss', $kd_buku, $judul_buku, $pengarang, $jenis_buku, $penerbit);
	$statement->execute();
		redirect('buku.php');
?>
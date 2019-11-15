<?php
	session_start();
	include_once('functions.php');
	// when no session named 'is_logged_in'?
	if (!isset($_SESSION['is_logged_in'])) {
		redirect('login.php');
	}
	// retrieve posted form data
	$id_anggota = $_POST['id_anggota'];
	$nm_anggota = $_POST['nm_anggota'];
	$alamat = $_POST['alamat'];
	$ttl_anggota = $_POST['ttl_anggota'];
	$status_anggota = $_POST['status_anggota'];

	$database = new mysqli('127.0.0.1', 'root', '', 'perpustakaan');
	$query = 'INSERT INTO anggota(`id_anggota`,  `nm_anggota`, `alamat`, `ttl_anggota`, `status_anggota`) VALUES(?, ?, ?, ?, ?)';
	$statement = $database->prepare($query);
	$statement->bind_param('issss', $id_anggota, $nm_anggota, $alamat, $ttl_anggota, $status_anggota);
	$statement->execute();
		redirect('anggota.php');
?>
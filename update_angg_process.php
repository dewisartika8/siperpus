<?php
	session_start();
	include_once 'functions.php';

	if(!isset($_SESSION['is_logged_in'])){
		redirect('login.php');
	}
	$id_anggota		= $_POST['id_anggota'];
	$nm_anggota	= $_POST['nm_anggota'];
	$alamat 			= $_POST['alamat'];
	$ttl_anggota		= $_POST['ttl_anggota'];
	$status_anggota			= $_POST['status_anggota'];

	$database = new mysqli('127.0.0.1','root','','perpustakaan');
	$query = "UPDATE anggota SET id_anggota='$id_anggota', nm_anggota='$nm_anggota', alamat = '$alamat', ttl_anggota = '$ttl_anggota', status_anggota = '$status_anggota' WHERE id_anggota='$id_anggota'";
	$statement = $database->prepare($query);
	$statement->execute();
	redirect('anggota.php');
	
?>	
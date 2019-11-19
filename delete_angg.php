<?php
	session_start();
	include_once('functions.php');
	
	if(!isset($_SESSION['is_logged_in'])){
		redirect('login.php');
	}else{
		$database = new mysqli('127.0.0.1', 'root', '', 'perpustakaan');
		$query = 'SELECT * FROM anggota';

		$id_anggota = $_GET['id_anggota'];
		$delete = "DELETE FROM anggota WHERE id_anggota='$id_anggota'";
		$statement = $database->prepare($delete);
		$statement->execute();
	}

	redirect('anggota.php');
	
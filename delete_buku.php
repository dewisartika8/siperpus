<?php
	session_start();
	include_once('function.php');
	
	if(!isset($_SESSION['is_logged_in'])){
		redirect('login.php');
	}else{
		$database = new mysqli('127.0.0.1', 'root', '', 'perpustakaan');
		$query = 'SELECT * FROM buku';

		$kd_buku = $_GET['kd_buku'];
		$delete = "DELETE FROM buku WHERE kd_buku='$kd_buku'";
		$statement = $database->prepare($delete);
		$statement->execute();
	}

	redirect('buku.php');
	?>
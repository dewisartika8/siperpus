<?php
	session_start();
	include_once('functions.php');
	
	if(!isset($_SESSION['is_logged_in'])){
		redirect('login.php');
	}else{
		$database = new mysqli('127.0.0.1', 'root', '', 'perpustakaan');
		$query = 'SELECT * FROM anggota';

		$id = $_GET['id'];
		$delete = "DELETE FROM angggota WHERE id='$id'";
		$statement = $database->prepare($delete);
		$statement->execute();
	}

	redirect('anggota.php');
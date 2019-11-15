<?php
	session_start();
	include_once('functions.php');
	if(isset($_SESSION['is_logged_in'])){
		redirect('index.php');
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$database = new mysqli('127.0.0.1', 'root', '', 'perpustakaan');
	$query = 'SELECT * FROM user WHERE username=? AND password=?';
	$statement = $database->prepare($query);
	$statement->bind_param('ss', $username, $password);
	$statement->execute();
	$result_set = $statement->get_result();
	if($result_set->num_rows) {
		$_SESSION['is_logged_in'] = TRUE;
		redirect('index.php');
	}else{
		redirect('login.php');
	}
?>
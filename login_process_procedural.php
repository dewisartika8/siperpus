<?php
	session_start();
	include_once('functions.php');

	if(isset($_SESSION['is_logged in'])){
		redirect('index_014.php');
	}
	$usename = $_POST['username'];
	$password = $_POST['password'];
	$database = mysqli_connect('127.0.0.1', 'user', 'user', 'perpustakaan');
	$query = 'SELECT * FROM account WHERE username=? AND password=?';
	$statement = mysqli_prepare($database, $query);
	mysqli_stmt_bind_param($statement, 'ss', $username, $password);
	mysqli_stmt_execute($statement);

	$result_set = mysqli_stmt_get_result($statement);

	if($mysqli_num_rows(result_set)) {
		$_SESSION['is_logged_in'] = TRUE;
		redirect('index.php');
	}else{
		redirect('login.php');
	}
	mysqli_stmt_close($statement);
	mysqli_close($database);
?>
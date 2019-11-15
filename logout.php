<?php
	session_start();
	include_once('functions.php');
	
	if (isset($_SESSION['is_logged_in'])) {
		unset($_SESSION['is_logged_in']);
	}
	redirect('index.php');
?>
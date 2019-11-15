<?php
	session_start();
	include_once('functions.php');

	if(isset($_SESSION['is_logged_in'])) {
		redirect('index.php');
	}

	open_page('login');
?>
<html>
<head>
	<title>
		<style>
			.judul {
				background-color: #19E33A;
				color: #000;
				padding: 20;
				margin-bottom: 0px;
			}
			.nav {
				margin-top: 0px;
				background-color: yellow;
				display: inline-flex;
				line-height: 0em;
				padding: 10px;
			}
		</style>
	</title>
</head>
<body>
<form action="login_process.php" method="post">
	<h1 class="judul"><center>Sistem Informasi Perpustakaan</center></h1>
	<br>
	<p class="nav" name='page_one'>
		<li><a href="index.php">Home</a></li>
		<li><a href="login.php">Login</a></li>
		<a href="buku.php">Lihat Buku</a>
	</p>
	<center>
	<table border="1">
		<h3><b>Login</b></h3>
		<p>Silahkan anda Login</p>
		<tr>
			<td>username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="action" value="login"></td>
		</tr>
	</table>
	</center>
</form>
<?php
	close_page();
?>
</body>
</html>
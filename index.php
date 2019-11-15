<?php
	session_start();
	include_once('functions.php');
	open_page('index');
?>

<style>
	.judul {
		background-color: #19E33A;
		color: #000;
		padding: 10;
		margin-bottom: 0px;
	}
	.nav {
		margin-top: 0px;
		background-color: yellow;
		display: inline-flex;
		line-height: 0em;
	}
	a {
		margin: 20px;
	}
</style>

<center><h1 class="judul">Sistem Informasi Perpustakaan</h1></center>
<br>

<?php
	if(isset($_SESSION['is_logged_in'])){
		?>
	<div name='page_one' class="nav">
		<a href="index.php">Home</a>
		<a href="anggota.php">Anggota</a>
		<a href="buku.php">Buku</a>
		<a href="pinjam.php">Pinjam</a>
		<a href="logout.php">Logout</a><br>
	</div>
	
	<?php	
		} else {
	?>
	
	<div name='page_one' style=" line-height: 0em;background-color: yellow; padding: 10px;">
		<a href="index.php">Home</a>
		<a href="login.php">Login</a>
		<a href="buku.php">Buku</a>
		<a href="anggota.php">Anggota</a>
	</div>
	
	<?php
		}
	?>

	<center style="padding: 0px;">
		<br>
		<br>
		<!-- <h3><b>Welcome</b></h3><br>
		<p>Sistem Informasi Perpustakaan</p><br> -->
		<img style="height: 300px;" src="perpus.jpeg"></img>
	</center>

	<footer>
		<p><center>Kelompok 04 D3-TK2018</center></p>
	</footer>
	<?php
		close_page();
	?>
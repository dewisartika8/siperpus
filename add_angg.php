<?php
	session_start();
	include_once('functions.php');
	if (!isset($_SESSION['is_logged_in'])) {
		redirect('login.php');
	}
?>
<center style="background-color: #0099CC; color: white; font-style: unset; padding: 20px; margin-bottom: -17px; "><h1>Sistem Informasi Perpustakaan</h1></center><br>

<div name='page_one' style=" line-height: 0em;background-color: yellow; padding: 20px; margin-top: 0px; margin-bottom: 20px;">
	<a href="index.php">Home</a>
	<a href="anggota.php">Anggota</a>
	<a href="buku.php">Buku</a>
	<a href="pinjam.php">Pinjam</a>
	<a href="logout.php">Logout</a><br>
</div>
<h2 style="margin-bottom: -17px;">Tambah Anggota</h2><br>
	<p>Silahkan tambahkan anggota yang belum ada!</p>
<form action="add_angg_process.php" method="post">
	<table border="1">
	
	<tr>
		<td>id_anggota</td>
		<td>:</td>
		<td><input type="number" name="id_anggota"></td>
	</tr>
	<tr>
		<td>nm_anggota</td>
		<td>:</td>
		<td><input type="text" name="nm_anggota"></td>
	</tr>
	<tr>
		<td>alamat</td>
		<td>:</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>ttl_anggota</td>
		<td>:</td>
		<td><textarea name="ttl_anggota"></textarea></td>
	</tr>
	<tr>
		<td>status_anggota</td>
		<td>:</td>
		<td><input type="text" name="status_anggota"></td>
	</tr>
	<tr>
		<td colspan="3"><input type="submit" name="action" value="save"></td>
	</tr>
</table>
</form>
<?php
close_page();
?>
<footer style="background-color: black; color: white;"><center>copyright</center></footer>
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
<h2 style="margin-bottom: -17px;">Tambah Daftar Buku</h2><br>
	<p>Silahkan tambahkan daftar buku yang belum ada</p>
<form action="add_buku_process.php" method="post">
	<table border="1">
	
	<tr>
		<td>kd_buku</td>
		<td>:</td>
		<td><input type="number" name="kd_buku"></td>
	</tr>
	<tr>
		<td>judul_buku</td>
		<td>:</td>
		<td><input type="text" name="judul_buku"></td>
	</tr>
	<tr>
		<td>pengarang</td>
		<td>:</td>
		<td><input type="text" name="pengarang"></td>
	</tr>
	<tr>
		<td>jenis_buku</td>
		<td>:</td>
		<td><textarea name="jenis_buku"></textarea></td>
	</tr>
	<tr>
		<td>penerbit</td>
		<td>:</td>
		<td><input type="text" name="penerbit"></td>
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
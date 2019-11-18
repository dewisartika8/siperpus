<?php
	include_once('functions.php');
	open_page('buku');
	$database = new mysqli('127.0.0.1', 'root', '', 'perpustakaan');
	$query = 'SELECT * FROM buku';
	$result_set = $database->query($query);
	?>
	<center style="background-color: #0099CC; color: white; font-style: unset; padding: 20px "><h1>Sistem Informasi Perpustakaan</h1></center><br>

<div name='page_one' style=" line-height: 0em;background-color: yellow; padding: 20px; margin-top: 0px; margin-bottom: 20px;">
	<a href="index.php">Home</a>
	<a href="anggota.php">Anggota</a>
	<a href="buku.php">Buku</a>
	<a href="pinjam.php">Pinjam</a>
	<a href="logout.php">Logout</a><br>
</div>
<h2 style="margin-bottom: -17px;">Buku</h2><br>
	<p>Berikut Informasi Buku yang Tersedia di Perpustakaan</p>
	<?php
	echo('<table border="1">');
	echo('<tr>');
	echo('<td>kd_buku</td>');
	echo('<td>judul_buku</td>');
	echo('<td>pengarang</td>');
	echo('<td>jenis_buku</td>');
	echo('<td>penerbit</td>');
	echo('</tr>');
	while ($row = $result_set->fetch_assoc()) {
		echo('<tr>');
		echo('<td>' . $row['kd_buku'] . '</td>');
		echo('<td>' . $row['judul_buku'] . '</td>');
		echo('<td>' . $row['pengarang'] . '</td>');
		echo('<td>' . $row['jenis_buku'] . '</td>');
		echo('<td>' . $row['penerbit'] . '</td>');		
?>
<td><a href="update_buku.php?kd_buku=<?php echo $row['kd_buku'];?>">Update</a> <a href="delete_buku.php?kd_buku=<?php echo $row['kd_buku'];?>">Delete</a></td>
	</tr>
<?php
}
	echo('</table>');
	$database->close();
	close_page();
?>
<br>
<a href="add_buku.php">Tambah Daftar Buku</a>
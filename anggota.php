<?php
	include_once('functions.php');
	open_page('anggota');
	$database = new mysqli('127.0.0.1', 'root', '', 'perpustakaan');
	$query = 'SELECT * FROM anggota';
	$result_set = $database->query($query);
	?>
	<center style="background-color: #0099CC; color: white; font-style: unset; padding: 20px; margin-bottom: -17px; "><h1>Sistem Informasi Perpustakaan</h1></center><br>

<div name='page_one' style=" line-height: 0em;background-color: yellow; padding: 20px; margin-top: 0px; margin-bottom: 20px;">
	<a href="index.php">Home</a>
	<a href="anggota.php">Anggota</a>
	<a href="buku.php">Buku</a>
	<a href="pinjam.php">Pinjam</a>
	<a href="logout.php">Logout</a><br>
</div>
<h2 style="margin-bottom: -17px;">Kontak HP</h2><br>
	<p>Berikut Informasi Kontak HP Civitas Del</p>
	<?php
	echo('<table border="1">');
	echo('<tr>');
	echo('<td>id_anggota</td>');
	echo('<td>nm_anggota</td>');
	echo('<td>alamat</td>');
	echo('<td>ttl_anggota</td>');
	echo('<td>status_anggota</td>');
	echo('</tr>');
	while ($row = $result_set->fetch_assoc()) {
		echo('<tr>');
		echo('<td>' . $row['id_anggota'] . '</td>');
		echo('<td>' . $row['nm_anggota'] . '</td>');
		echo('<td>' . $row['alamat'] . '</td>');
		echo('<td>' . $row['ttl_anggota'] . '</td>');
		echo('<td>' . $row['status_anggota'] . '</td>');		
?>
<td><a href="update_angg.php?id=<?php echo $row['id'];?>">Update</a> <a href="delete_angg.php?id=<?php echo $row['id'];?>">Delete</a></td>
	</tr>
<?php
}
	echo('</table>');
	$database->close();
	close_page();
?>
<br>
<a href="add_angg.php">Tambah Anggota</a>
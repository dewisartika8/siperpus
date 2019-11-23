<?php
	session_start();
	include_once 'functions.php';

	if (!isset($_SESSION['is_logged_in'])) {
		redirect('login.php');
	}
	open_page('add buku');
	$kd_buku =$_GET['kd_buku'];
	$database = mysqli_connect('127.0.0.1', 'root', '', 'perpustakaan');
	$data = "SELECT * FROM buku WHERE kd_buku='$kd_buku'";
	$result_set = $database->query($data);
	while($data = $result_set->fetch_assoc()){
?>

<form action="update_buku_process.php" method="post">
	<table border="1">
		<tr>
			<td>Kd Buku</td>
			<td>:</td>
			<td><input type="text" name="kd_buku" value="<?php echo $data['kd_buku'] ?>" readonly></td>
		</tr>
		
		<tr>
			<td>Judul Buku</td>
			<td>:</td>
			<td><input type="text" name="judul_buku" value="<?php echo $data['judul_buku']?>"></td>
		</tr>
		
		<tr>
			<td>Pengarang</td>
				<td>:</td>
				<td><input type="text" name="pengarang" value="<?php echo $data['pengarang']?>"></td>
		</tr>
		
		<tr>
			<td>Jenis Buku</td>
				<td>:</td>
				<td><input type="text" name="jenis_buku" value="<?php echo $data['jenis_buku']?>"></td>
		</tr>
		
		<tr>
			<td>Penerbit</td>
				<td>:</td>
				<td><input type="text" name="penerbit" value="<?php echo $data['penerbit']?>"></td>
		</tr>
		
		<tr>
			<td colspan="3"><input type="submit" name="action" value="update" href="kd_buku=<?php echo $data['kd_buku'];?>"></td>
		</tr>
		
	</table>
</form>

<?php
}
close_page();
?>
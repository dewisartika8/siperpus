<?php
	session_start();
	include_once 'functions.php';

	if (!isset($_SESSION['is_logged_in'])) {
		redirect('login.php');
	}
	open_page('update anggota');
	$id =$_GET['id_anggota'];
	$database = mysqli_connect('127.0.0.1', 'root', '', 'perpustakaan');
	$data = "SELECT * FROM anggota WHERE id='$id_anggota'";
	$result_set = $database->query($data);
	while($data = $result_set->fetch_assoc()){
?>

<form action="update_angg_process.php" method="post">
	<table border="1">
		<tr>
			<td>ID Anggota</td>
			<td>:</td>
			<td><input type="text" name="id_anggota" value="<?php echo $data['id_anggota'] ?>" readonly></td>
		</tr>
		<tr>
			<td>Nm Anggota</td>
			<td>:</td>
			<td><input type="text" name="nm_anggota" value="<?php echo $data['nm_anggota']?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat']?>"></td>
		</tr>
		<tr>
			<td>ttl_anggota</td>
				<td>:</td>
				<td><input type="text" name="ttl_anggota" value="<?php echo $data['ttl_anggota']?>"></td>
		</tr>
		<tr>
			<td>Status Anggota</td>
				<td>:</td>
				<td><input type="text" name="status_anggota" value="<?php echo $data['status_anggota']?>"></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="action" value="update" href="id=<?php echo $data['id_anggota'];?>"></td>
		</tr>
		
	</table>
</form>
<?php
}
close_page();
?>
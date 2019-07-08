<?php include 'connection.php'; ?>

<?php 

	// Disediakan oleh: MUHAMMAD SHAKIRIN BIN SAMIN (github.com/CyberSharky94)

	$guru_id = $_GET['id']; //dapatkan ID dari URL

	//Code Proses di sini
	$sql = "SELECT * FROM guru WHERE guru_id = '".$guru_id."'";
	$result = mysqli_query($conn, $sql);
	$data = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table class="table table-bordered table-striped table-hover">
	<tbody>
		<tr>
			<th>
				Nama Guru
			</th>
			<td>
				<?php echo $data['guru_nama']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Telfon (H/P)
			</th>
			<td>
				<?php echo $data['guru_telefon']; ?>
			</td>
		</tr>
		<tr>
			<th>
				No Kad Pengenalan
			</th>
			<td>
				<?php echo $data['guru_nokp']; ?>
			</td>
		</tr>
		<tr>
			<th>
				Tarikh Lahir
			</th>
			<td>
				<?php echo $data['guru_tlahir']; ?>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<button type="button" id="kembali" name="kembali" onclick="window.history.back();">Kembali</button>
			</td>
		</tr>
	</tbody>
</table>

</body>
</html>
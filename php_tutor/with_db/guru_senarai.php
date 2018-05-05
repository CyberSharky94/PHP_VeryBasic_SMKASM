<?php include 'connection.php'; ?>

<?php 

	// Disediakan oleh: MUHAMMAD SHAKIRIN BIN SAMIN (github.com/CyberSharky94)
	
	if(isset($_POST['buang_rekod']))
	{
		$guru_id = $_POST['guru_id'];
		$sql = "DELETE FROM `guru` WHERE guru_id = '".$guru_id."'";
		$result = mysqli_query($conn, $sql);

		if(!$result) 
		{
			$mesej = "RALAT: Rekod Gagal Dibuang";
		} else {
			$mesej = "Rekod Telah Berjaya Dibuang";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				<th>
					Bil
				</th>
				<th>
					Nama Guru
				</th>
				<th>
					Telefon (H/P)
				</th>
				<th>
					No Kad Pengenalan
				</th>
				<th>
					Tarikh Lahir
				</th>
				<th>
					Tindakan
				</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$sql = "SELECT * FROM guru";
			$result = mysqli_query($conn, $sql);
			$i=0;
			while($row = mysqli_fetch_array($result))  { $i++; ?>
			<tr>
				<td>
					<?php echo $i; ?>
				</td>
				<td>
					<?php echo $row['guru_nama']; ?>
				</td>
				<td>
					<?php echo $row['guru_telefon']; ?>
				</td>
				<td>
					<?php echo $row['guru_nokp']; ?>
				</td>
				<td>
					<?php echo $row['guru_tlahir']; ?>
				</td>
				<td>
					<button type="button" id="papar" name="papar" class="btn btn-primary" onclick="window.location.href='guru_papar.php?id=<?php echo $row['guru_id']; ?>'">Papar</button>
		    		<button type="button" id="kemaskini" name="kemaskini" class="btn btn-warning" onclick="window.location.href='guru_kemaskini.php?id=<?php echo $row['guru_id']; ?>'">Kemaskini</button>
		    		<form method="POST">
		    			<input type="hidden" name="guru_id" value="<?php echo $row['guru_id']; ?>">
		    			<button id="buang_rekod" name="buang_rekod" class="btn btn-warning">Buang Rekod</button>
		    		</form>
				</td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>
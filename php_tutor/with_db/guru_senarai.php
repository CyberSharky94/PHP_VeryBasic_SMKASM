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
			$_SESSION['mesej'] = "RALAT: Rekod Guru Gagal Dibuang";
		} else {
			$_SESSION['mesej'] = "Rekod Guru Telah Berjaya Dibuang";
		}
	}

	// Mesej Tambah Rekod Berjaya
	if(isset($_SESSION['mesej']))
	{
		$mesej = $_SESSION['mesej'];
		unset($_SESSION['mesej']); // bersihkan rekod mesej
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2>Senarai Guru</h2>
	<hr>

	<a href="guru_tambah.php">Tambah Rekod Guru</a><br><br>

	<table border="1" class="table table-bordered table-striped table-hover">
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

			$num_rows = mysqli_num_rows($result);

			if($num_rows > 0)
			{
				$i=0;
				while($row = mysqli_fetch_array($result))  { 
					$i++; 
			?>
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
					<button type="button" id="papar" name="papar" onclick="window.location.href='guru_papar.php?id=<?php echo $row['guru_id']; ?>'">Papar</button>
		    		<button type="button" id="kemaskini" name="kemaskini" class="btn btn-warning" onclick="window.location.href='guru_kemaskini.php?id=<?php echo $row['guru_id']; ?>'">Kemaskini</button>
					
					<!-- Borang Untuk Buang Rekod -->
					<form method="POST">
		    			<input type="hidden" name="guru_id" value="<?php echo $row['guru_id']; ?>">
		    			<button id="buang_rekod" name="buang_rekod" class="btn btn-warning" onclick="return confirm('Adakah anda pasti untuk membuang rekod ini?');">Buang Rekod</button>
		    		</form>
				</td>
			</tr>
			<?php 
				} 
			} else { ?>
			<tr>
				<td colspan="6">Tiada rekod ditemui.</td>
			</tr>
			<?php
			}
			?>
		</tbody>
	</table>

	<!-- JavaScript -->
	<script>

		// Paparan Mesej
		<?php if(isset($mesej)) { ?>
			alert("<?php echo $mesej; ?>");
		<?php } ?>

	</script>

</body>
</html>
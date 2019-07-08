<?php include 'connection.php'; ?>

<?php 

	// Disediakan oleh: MUHAMMAD SHAKIRIN BIN SAMIN (github.com/CyberSharky94)

	//Code Proses di sini
	if(isset($_POST['hantar']))
	{
		$guru_nama = $_POST['guru_nama'];
		$guru_telefon = $_POST['guru_telefon'];
		$guru_nokp = $_POST['guru_nokp'];
		$guru_tlahir = $_POST['guru_tlahir'];

		$sql = "INSERT INTO `guru`(`guru_nama`, `guru_telefon`, `guru_nokp`, `guru_tlahir`) VALUES ('".$guru_nama."', '".$guru_telefon."', '".$guru_nokp."', '".$guru_tlahir."')";
		$result = mysqli_query($conn, $sql);

		if(!$result)
		{
			$_SESSION['mesej'] = "RALAT: Gagal Tambah Rekod Guru";
		} else {
			$_SESSION['mesej'] = "Tambah Rekod Guru Berjaya!";
			header("Location: guru_senarai.php"); // redirect @ beralih ke lokasi
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST">
		<fieldset>

		<!-- Form Name -->
		<legend>Tambah Rekod Guru</legend>

		<!-- Text input-->
		<div>
		  <label for="guru_nama">Nama Guru</label>  
		  <div >
		  <input type="text" id="guru_nama" name="guru_nama" placeholder="Nama Guru" required="" >
		    
		  </div>
		</div>

		<!-- Text input-->
		<div>
		  <label for="guru_telefon">Telefon (H/P)</label>  
		  <div>
		  <input type="text" id="guru_telefon" name="guru_telefon" placeholder="Telefon (H/P)" required="">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div>
		  <label for="guru_nokp">No Kad Pengenalan</label>  
		  <div>
		  <input type="text" id="guru_nokp" name="guru_nokp" placeholder="No Kad Pengenalan" required="">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div>
		  <label for="guru_tlahir">Tarikh Lahir</label>  
		  <div>
		  <input type="date" id="guru_tlahir" name="guru_tlahir" placeholder="Tarikh Lahir" required="">
		    
		  </div>
		</div>

		<!-- Button (Double) -->
		<div>
		  <label for="hantar"></label>
		  <div>
		    <button id="hantar" name="hantar">Hantar</button>
		    <button type="reset" id="reset" name="reset">Set Semula</button>
			<br>
			<a href="guru_senarai.php">Kembali ke Senarai Guru</a>
		  </div>
		</div>

		</fieldset>
	</form>


</body>
</html>
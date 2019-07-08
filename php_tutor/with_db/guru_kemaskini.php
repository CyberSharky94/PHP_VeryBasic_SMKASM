<?php include 'connection.php'; ?>

<?php 

	// Disediakan oleh: MUHAMMAD SHAKIRIN BIN SAMIN (github.com/CyberSharky94)

	$guru_id = $_GET['id']; //dapatkan ID dari URL

	//Code Proses di sini
	if(isset($_POST['hantar']))
	{
		$guru_nama = $_POST['guru_nama'];
		$guru_telefon = $_POST['guru_telefon'];
		$guru_nokp = $_POST['guru_nokp'];
		$guru_tlahir = $_POST['guru_tlahir'];

		$sql = "UPDATE `guru` SET `guru_nama`='".$guru_nama."', `guru_telefon`='".$guru_telefon."', `guru_nokp`='".$guru_nokp."',`guru_tlahir`='".$guru_tlahir."' WHERE `guru_id`='".$guru_id."'";
		$result = mysqli_query($conn, $sql);

		if(!$result)
		{
			$_SESSION['mesej'] = "RALAT: Gagal Kemaskini Rekod Guru";
		} else {
			$_SESSION['mesej'] = "Kemaskini Rekod Guru Berjaya";
			header("Location: guru_senarai.php");
		}
	}

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

	<form class="form-horizontal" method="POST" action="">
		<fieldset>

		<!-- Form Name -->
		<legend>Tambah Rekod Guru</legend>

		<!-- Text input-->
		<div >
		  <label for="guru_nama">Nama Guru</label>  
		  <div>
		  <input id="guru_nama" name="guru_nama" placeholder="Nama Guru" required="" type="text" value="<?php echo $data['guru_nama']; ?>">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div >
		  <label for="guru_telefon">Telefon (H/P)</label>  
		  <div>
		  <input id="guru_telefon" name="guru_telefon" placeholder="Telefon (H/P)" required="" type="text" value="<?php echo $data['guru_telefon']; ?>">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div >
		  <label for="guru_nokp">No Kad Pengenalan</label>  
		  <div>
		  <input id="guru_nokp" name="guru_nokp" placeholder="No Kad Pengenalan" required="" type="text" value="<?php echo $data['guru_nokp']; ?>">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div >
		  <label for="guru_tlahir">Tarikh Lahir</label>  
		  <div>
		  <input id="guru_tlahir" name="guru_tlahir" placeholder="Tarikh Lahir" required="" type="date" value="<?php echo $data['guru_tlahir']; ?>">
		    
		  </div>
		</div>

		<!-- Button (Double) -->
		<div >
		  <label for="hantar"></label>
		  <div>
		    <button id="hantar" name="hantar">Hantar</button>
		    <button type="reset" id="reset" name="reset">Set Semula</button>
			<a href="guru_senarai.php">Kembali ke Senarai Guru</a>
		  </div>
		</div>

		</fieldset>
	</form>


</body>
</html>
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
			$mesej = "RALAT: Gagal Tambah Rekod Guru";
		} else {
			header("Location: guru_senarai.php?status=1");
		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form class="form-horizontal" method="POST">
		<fieldset>

		<!-- Form Name -->
		<legend>Tambah Rekod Guru</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="guru_nama">Nama Guru</label>  
		  <div class="col-md-4">
		  <input id="guru_nama" name="guru_nama" placeholder="Nama Guru" class="form-control input-md" required="" type="text">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="guru_telefon">Telefon (H/P)</label>  
		  <div class="col-md-4">
		  <input id="guru_telefon" name="guru_telefon" placeholder="Telefon (H/P)" class="form-control input-md" required="" type="text">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="guru_nokp">No Kad Pengenalan</label>  
		  <div class="col-md-4">
		  <input id="guru_nokp" name="guru_nokp" placeholder="No Kad Pengenalan" class="form-control input-md" required="" type="text">
		    
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="guru_tlahir">Tarikh Lahir</label>  
		  <div class="col-md-4">
		  <input id="guru_tlahir" name="guru_tlahir" placeholder="Tarikh Lahir" class="form-control input-md" required="" type="date">
		    
		  </div>
		</div>

		<!-- Button (Double) -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="hantar"></label>
		  <div class="col-md-8">
		    <button id="hantar" name="hantar" class="btn btn-primary">Hantar</button>
		    <button type="reset" id="reset" name="reset" class="btn btn-danger">Set Semula</button>
		  </div>
		</div>

		</fieldset>
	</form>


</body>
</html>
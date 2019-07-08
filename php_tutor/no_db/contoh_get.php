<?php

	// Disediakan oleh: MUHAMMAD SHAKIRIN BIN SAMIN (github.com/CyberSharky94)

	/* PENERANGAN:
	* 
	* Data GET dihantar / diuruskan melalui URL.
	* Parameter data yang dihantar melalui GET di URL akan bermula dengan simbol '?' diikuti kunci dan nilai
	*
	* Contoh: website.com?kunci=nilai 
	*
	*/
	
	if(isset($_GET['data']))
	{
		$data = $_GET['data'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		Data: <input type="text" name="data">
		<button>Hantar</button>
	</form>
	<hr>
	<h3>Keputusan</h3>
	Data <b>GET</b>: <?php if(isset($data)) { echo $data; } ?>
</body>
</html>
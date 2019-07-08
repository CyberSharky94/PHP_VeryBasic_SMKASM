<?php

	// Disediakan oleh: MUHAMMAD SHAKIRIN BIN SAMIN (github.com/CyberSharky94)

	/* PENERANGAN:
	* 
	* Data POST dihantar / diuruskan melalui Permintaan HTTP (HTTP Request).
	* Data yang dihantar tidak dapat dilihat melalui URL.
	* 
	* Pada tag <form>, mesti dinyatakan method="POST"
	*
	*/

	if(isset($_POST['hantar']))
	{
		$data = $_POST['data'];
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		Data: <input type="text" name="data">
		<button name="hantar">Hantar</button>
	</form>
	<hr>
	<h3>Keputusan</h3>
	Data <b>POST</b>: <?php if(isset($data)) { echo $data; } ?>
</body>
</html>
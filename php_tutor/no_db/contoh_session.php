<?php

	// Disediakan oleh: MUHAMMAD SHAKIRIN BIN SAMIN (github.com/CyberSharky94)

	/* PENERANGAN:
	* 
	* Pembolehubah SESSION digunakan bagi menyimpan data sementara di dalam komputer.
	* Secara umum, data yang disimpan di dalam SESSION akan hilang selepas 24 minit.
	* Pembolehubah SESSION boleh diakses di mana-mana lokasi selagi data tidak dipadam (unset() / session_destroy()).
	* Bagi menggunakan SESSION, session_start() perlu diletakkan terlebih dahulu.
	*
	* Situasi penggunaan SESSION: Login, Logout, Mesej setelah proses daripada PHP atau Database
	*
	*/

	session_start();

	// Tetapkan data pada $_SESSION.
	$_SESSION['data'] = 'HI!!!';

	if(isset($_POST['buang_session']))
	{
		unset($_SESSION); // kosongkan semua data dalam $_SESSION
		session_destroy(); // musnahkan $_SESSION
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h4>Mesej $_SESSION</h4>
	<?php if(isset($_SESSION['data'])) { ?>
		<p><?php echo $_SESSION['data']; ?></p>
	<?php } else { ?>
		<p>SESSION telah dibuang!</p>
	<?php } ?>
	<br>
	<form method="POST">
		<button name="buang_session" onclick="return confirm('Adakah anda pasti untuk membuang SESSION?');">Buang SESSION</button>
	</form>
</body>
</html>
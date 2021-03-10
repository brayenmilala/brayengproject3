<?php
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Brayen db</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
	<!--header -->
	<header>
		<div class="container">
		<h1><a href="dashboard.php">Brayendb</a></h1>
		<ul>
		<li><a href="dashboard.php">Dashboard</a></li>
		<li><a href="profil.php">Profil</a></li>
		<li><a href="datakategori.php">Data Kategori</a></li>
		<li><a href="data-produk.php">Data Produk</a></li>
		<li><a href="fibonachi.php">Fibonachi</a></li>
		<li><a href="aritmatika.php">Aritmatika</a></li>
		<li><a href="registrasi.php">Registrasi</a></li>
		<li><a href="keluar.php">Keluar</a></li>
		
		</ul>
	</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang </h4>
			</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Dibuatoleh &copy; 2021-Brayenmilala.</small>
		</div>
	</footer>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Halaman Pengumuman</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="styleP.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
	<!-- header start -->
<header class="header">
<div class="container-fluid bg-dark  text-light footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
	<div class="header-main">
		<div class="logo">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="img/logo.png" alt="logo" width="199px">
		</div>
		<div class="open-nav-menu">
		<span></span>
		</div>
		<div class="menu-overlay">
		</div>
		<!-- navigation menu start -->
		<nav class="nav-menu">
		<div class="close-nav-menu">
			<img src="img/close.svg" alt="close">
		</div>
		<ul class="menu">
			<li class="menu-item menu-item-has-children">
				<a href="indexAdmin.php" data-toggle="sub-menu">Beranda</a>
			</li>
			<li class="menu-item">
				<a href="temukanAdmin.php">Temukan</a>
			</li>
			<li class="menu-item">
				<a href="pengumuman.php">Pengumuman</a>
			</li>
			<li class="menu-item menu-item-has-children">
				<a href="laporkanAdmin.php" data-toggle="sub-menu">Laporkan<i class="plus"></i></a>
				<ul class="sub-menu">
					<li class="menu-item"><a href="hilangAdmin.php">Laporkan Barang Hilang</a></li>
					<li class="menu-item"><a href="temuanAdmin.php">Laporkan Barang Temuan</a></li>
				</ul>
			</li>
			<li class="menu-item">
				<a href="grafikAdmin.php">Grafik</a>
			</li>
			<li class="menu-item">
				<a href="profilAdmin.php">Profil</a>
			</li>
			<li class="menu-item">
			<a href="logout.php"><i class='bx bx-log-out'></i></a>
			</li>

			<li class="menu-item">
			<box-icon name='log-out'></box-icon>
		</li>
		</ul>
		</nav>
		<!-- navigation menu end -->
	</div>
</div>
</header>

<script src="js/script.js"></script>
</body>
</html>
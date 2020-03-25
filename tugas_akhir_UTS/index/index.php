<!DOCTYPE html>
<html>
<head>
	<title> Selamat Datang di MyKosan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.js"></script>

</head>
<body>
<div class="content">
	<header>
		<ul>
			<ol align="center"><img src="kos_logo.png" height="200" width="200" align="center"></ol>
		<h1 class="judul">MyKosan</h1>
		<h3 class="deskripsi">"Jadikan Kosmu Seperti Rumahmu"</h3>
		</ul>
	</header>
 
	<div class="menu">
		<ul>
			<a href="index.php?page=login"></a>
			<li><a href="index.php?page=beranda" ><b>BERANDA</a></li>
			<li><a href="index.php?page=profil"><b>PROFIL</a></li>
			<li><a href="index.php?page=fasilitas"><b>harga dan FASILITAS</a></li>
			<li><a href="index.php?page=kontak"><b>KONTAK</a></li>
			<li><a href="index.php?page=kritik_saran"><b>kritik dan Saran</a></li>
			<li><a href="redirectkeluar.php"><b>LOGOUT</a></li>
		</ul>

	</div>
	
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'beranda':
				include "halaman/beranda.php";
				break;
			case 'profil':
				include "halaman/profil.php";
				break;
			case 'fasilitas':
				include "halaman/fasilitas.php";
				break;
			case 'kontak':
				include "halaman/kontak.php";
				break;
			case 'kritik_saran':
				include "halaman/kritik_saran.php";
				break;						
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/beranda.php";
	}
 
	 ?>
 
	</div>
</div>
<div class="bawah">
	Sistem Informasi<br>Fakultas Ilmu Komputer<br>Universitas Pembangunan Nasional "Veteran" Jawa Timur <br> Copyright © 2020 Muhammad Yusuf Ardiansyah <br>
</div>
</body>
</html>
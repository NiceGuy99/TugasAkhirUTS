<?php
include"insert.php";
$PENILAIAN           	= $_POST['PENILAIAN'];
$KRITIK         		= $_POST['KRITIK'];
$SARAN        			= $_POST['SARAN'];

$sql="INSERT INTO kritik_saran (PENILAIAN, KRITIK, SARAN) VALUES ('$PENILAIAN','$KRITIK','$SARAN')";
mysqli_query($koneksi, $sql) or die (mysqli_error());
header("location:http://localhost:8181/praktikumpemweb/tugas_akhir_UTS/index.php?page=kritik_saran");
?>
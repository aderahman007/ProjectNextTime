<?php
$koneksi = mysqli_connect("localhost", "root", "", "sekolah");

//check koneksi
if (mysqli_connect_errno()) {
	# code...
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>
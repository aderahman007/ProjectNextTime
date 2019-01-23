<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);


$login = mysqli_query($koneksi, "select * from admin where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
	# code...
	$bio = mysqli_fetch_array($login);
	$_SESSION['nama'] = $bio['nama'];
	$_SESSION['jabatan'] = $bio['jabatan'];
	$_SESSION['username'] = $bio['username'];
	$_SESSION['status'] = "login";
	header("location:../index.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>
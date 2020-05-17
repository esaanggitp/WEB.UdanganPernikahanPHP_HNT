<?php
session_start();

// menghubungkan dengan koneksi
include '../koneksi.php';
 $nama_admin = mysqli_real_escape_string($conect, $_POST['nama_admin']);
  $pass_admin = mysqli_real_escape_string($conect,md5($_POST['pass_admin']) );
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conect,"select * from admin where nama_admin='$nama_admin' and pass_admin='$pass_admin'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0){
	
	$_SESSION['nama_admin'] = $nama_admin;
	$_SESSION['pass_admin'] = $pass_admin;
	$_SESSION['status'] = "login";
	$_SESSION["last_login_timestamp"] = time();

		 
		header("location:home.php");
}else{
	header("location:index.php?pesan=gagal");
}
	
?>
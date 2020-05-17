<?php
include "../koneksi.php";

?>
 <?php
 $web1=mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM web where id_web='1'"));
 ?>
 <?php
session_start();
    if(isset($_SESSION["nama_admin"])){ // jika ada sesi
      
      // jika tidak ada aktivitas pada browser 
      // selama 15 menit, maka
      if((time() - $_SESSION["last_login_timestamp"]) > 900){// 900 = 15 * 60
 
        // akan diarahkan kehalaman logout.php
        header("location: logout.php");
      } else {
        // jika ada aktivitas update waktu
        $_SESSION["last_login_timestamp"] = time();
        $_SESSION["nama_admin"];
        $_SESSION["last_login_timestamp"];
        
      }
    } else {
      header("location:index.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin <?php echo $web1['nama_web'];?></title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
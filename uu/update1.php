
<?php 

include '../koneksi.php';
$id = $_POST['id'];
$nama_slid = $_POST['nama_slid'];
mysqli_query($conect,"update slid set nama_slid='$nama_slid' where id_slid='$id'");
header("location:data_slid.php");
 
?>
               
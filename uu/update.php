
<?php 

include '../koneksi.php';
$id = $_POST['id'];
$nama_web = $_POST['nama_web'];
$no_hp = $_POST['no_hp'];
$ket_web1 =$_POST['ket_web1'];
$ket_wa =$_POST['ket_wa'];
$ket_web =$_POST['ket_web'];
mysqli_query($conect,"update web set nama_web='$nama_web', no_hp='$no_hp', ket_wa='$ket_wa', ket_web='$ket_web', ket_web1='$ket_web1' where id_web='$id'");
header("location:data_web.php");
 
?>
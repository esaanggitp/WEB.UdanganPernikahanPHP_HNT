
<?php 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$ket = $_POST['keterangan'];
$des = $_POST['deskripsi_produk'];
$harga = $_POST['harga'];

mysqli_query($conect,"update produk set nama_produk='$nama' , kode_produk='$ket', deskripsi_produk='$des', harga='$harga'  where id_produk='$id'");
header("location:data_produk.php");
 
?>
               
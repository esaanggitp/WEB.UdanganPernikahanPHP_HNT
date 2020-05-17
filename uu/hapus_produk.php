<?php
session_start();
//panggil koneksi
include "../koneksi.php";

$id=$_GET['id_bank'];  //dapatkan id

if(isset($id)){ //jika ada id
//ambil data di tabel berdasarkan id
$data=mysqli_fetch_array(mysqli_query($conect, "select * from produk where id_produk='$id'"));
//hapus gambar di folder
unlink("../gambar/$data[gambar_produk]");
//hapus data di tabel
$hapus=mysqli_query($conect, "DELETE from produk where id_produk='$id'");
//jika hapus berhasil
if($hapus){
    echo"<script>alert('Data Berhasil di Hapus');document.location='data_produk.php'</script>";
}
else{ //jika gagal
    echo"<script>alert('Error Bos !!');document.location='data_produk.php'</script>";
}

}
?>

<?php 
include '../koneksi.php';

$nama = $_POST['nama'];
$ket = $_POST['keterangan'];
$des = $_POST['deskripsi_produk'];
$harga = $_POST['harga'];
$foto = $_FILES['foto']['name']; 
$tmp = $_FILES['foto']['tmp_name'];
$fotobaru = date('dmYHis').$foto;
$path = "../gambar/".$fotobaru;

if(move_uploaded_file($tmp, $path)){
	  $query = "INSERT INTO produk VALUES('"."', '".$nama."', '".$ket."', '".$fotobaru."', '".$des."', '".$harga."')";  
	  $sql = mysqli_query($conect, $query); 

	    if($sql){
	    	header("location: data_produk.php"); 
	    	  }else{
	    	  	  echo "Maaf, Gambar gagal untuk diupload.";  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
	    	  	}
	    	  }
 
 ?>
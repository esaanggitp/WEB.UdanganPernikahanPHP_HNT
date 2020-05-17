
<?php 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
if(isset($_POST['ubah_foto'])){ 
	$foto = $_FILES['foto']['name']; 
	 $tmp = $_FILES['foto']['tmp_name'];   
	 $fotobaru = date('dmYHis').$foto;   
	  $path = "../gambar/".$fotobaru;  

	  if(move_uploaded_file($tmp, $path)){ 
	  	$query = "SELECT * FROM produk WHERE id_produk='".$id."'";    
	  	$sql = mysqli_query($conect, $query); 
	   $data = mysqli_fetch_array($sql);  
	  	if(is_file("../gambar/".$data['gambar_produk']))     
	  	unlink("../gambar/".$data['gambar_produk']); 
	  $query = "UPDATE produk SET nama_produk='".$nama."', gambar_produk='".$fotobaru."' WHERE id_produk='".$id."'";    
	  $sql = mysqli_query($conect, $query); 
   
	  if($sql){ 
	    
	  	header("location: data_produk.php");  
	  }else{           
	   echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";      echo "<br><a href='data_produks.php'>Kembali Ke Form</a>";    }  }else{      echo "Maaf, Gambar gagal untuk diupload.";    echo "<br><a href='data_produk.php'>Kembali Ke Form</a>";  }
	}else{  
	   	$query = "UPDATE produk SET nama_produk='".$nama." WHERE id_produk='".$id."'"; 
	   	 $sql = mysqli_query($conect, $query); 
	
	   	 if($sql){ 
	   	  header("location: data_produk.php"); 
	   	   }else{
	   	    
	   	        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";    echo "<br><a href='data_produk.php'>Kembali Ke Form</a>";
	   	         }
	   	     }
	   	         ?>
               
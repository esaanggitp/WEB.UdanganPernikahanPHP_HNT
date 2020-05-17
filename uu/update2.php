
<?php 
include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
if(isset($_POST['ubah_foto'])){ 
	$foto = $_FILES['foto']['name']; 
	 $tmp = $_FILES['foto']['tmp_name'];   
	 $fotobaru = date('dmYHis').$foto;   
	  $path = "../gambar/slid/".$fotobaru;  
	  if(move_uploaded_file($tmp, $path)){ 
	  	$query = "SELECT * FROM slid WHERE id_slid='".$id."'";    
	  	$sql = mysqli_query($conect, $query); 
	   $data = mysqli_fetch_array($sql);  
	  	if(is_file("../gambar/slid/".$data['gambar_slid']))     
	  	unlink("../gambar/slid/".$data['gambar_slid']); 
	  $query = "UPDATE slid SET nama_slid='".$nama."', gambar_slid='".$fotobaru."' WHERE id_slid='".$id."'";    
	  $sql = mysqli_query($conect, $query); 
   
	  if($sql){ 
	    
	  	header("location: data_slid.php");  
	  }else{           
	   echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";      echo "<br><a href='data_slids.php'>Kembali Ke Form</a>";    }  }else{      echo "Maaf, Gambar gagal untuk diupload.";    echo "<br><a href='data_slid.php'>Kembali Ke Form</a>";  }
	}else{  
	   	$query = "UPDATE slid SET nama_slid='".$nama." WHERE id_slid='".$id."'"; 
	   	 $sql = mysqli_query($conect, $query); 
	
	   	 if($sql){ 
	   	  header("location: data_slid.php"); 
	   	   }else{
	   	    
	   	        echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";    echo "<br><a href='data_slid.php'>Kembali Ke Form</a>";
	   	         }
	   	     }
	   	         ?>
               
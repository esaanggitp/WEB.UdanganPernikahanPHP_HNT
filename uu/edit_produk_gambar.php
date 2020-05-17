<?php
include "head.php";
?>
<?php
include "nav.php";
?>
     
      <?php  
include '../koneksi.php'; 

      $id = $_GET['id'];    

      $query = "SELECT * FROM produk WHERE id_produk='".$id."'";  
      $sql = mysqli_query($conect, $query);  
 
      $data = mysqli_fetch_array($sql); 
      ?>    

       <div class="container-fluid">
        <div class="row">
                    <div class="col-lg-12">
                        <h3>
                    <a href="data_produk.php"><button class="btn btn-info btn-sm">kembali</button> </a>
                        </h3>
                        <ol class="breadcrumb">
                          
                            <li class="active">
                                edit Data Gambar produk
                            </li>

                        </ol>

                    </div>
                </div>
                <!-- /.row -->
             <div class="row">

                <!-- .col lg 12 -->
                    <div class="col-lg-12">

                    <!-- col sm 4 -->
                            <div class="col-sm-4">
      <br>
      <form method="post" action="update3.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
        <table cellpadding="8">  
          <tr>    
        <tr>Nama produk :<?php echo $data['nama_produk']; ?></tr> <br>
            <input type="hidden" name="id" value="<?php echo $data['id_produk']; ?>"> 
            <td><input type="hidden" name="nama" value="<?php echo $data['nama_produk']; ?>"></td> 
             </tr> 
           <input type="checkbox" name="ubah_foto" value="true"> Ceklis jika ingin mengubah foto
                                          <br>      <input type="file" name="foto">    </td>  </tr>  </table>
                                            <hr>  
                                            <input class="btn btn-info btn-sm" type="submit" value="Ubah">  
                                            
                                    
                                          </form>

                                          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include "footer.php";

    ?> 
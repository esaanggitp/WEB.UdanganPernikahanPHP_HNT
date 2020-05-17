<?php
include "head.php";
?>
<?php
include "nav.php";
?>

       <div class="container-fluid">
       	<div class="row">
                    <div class="col-lg-12">
                        <h3>
                    
                        </h3>
                        <ol class="breadcrumb">
                          
                            <li class="active">
                                edit Data web
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
                            <!-- /.form menggunakan form group, pelajari cara membuat form di bootstrap-->
<?php
include '../koneksi.php';
$id = $_GET['id'];
  $query = mysqli_query($conect, "SELECT * FROM web WHERE id_web='$id'"); 
  while ( $a = mysqli_fetch_array( $query)) {
 
   
  
?>
                            <form action="update.php" method="post" enctype="multipart/form-data" role="form">
                          
                            <div class="form-group">
                                <label>Nama web</label>
                                <input type="hidden" name="id" value="<?php echo $a['id_web']; ?>">
                                <input type="text" class="form-control" p" name="nama_web"  maxlength="50" autocomplete="off" autofocus value="<?php echo $a['nama_web']; ?>">
                            </div>
                            <div class="form-group">
                                <label>NO HP</label>
                                <input class="form-control"  name="no_hp" rows="5" value="<?php echo $a['no_hp']; ?>"></input>
                            </div>
                            <div class="form-group">
                                <label>Keterangan WA</label>
                                <textarea class="form-control"  name="ket_wa"  cols="40" rows="5" value=""><?php echo $a['ket_wa'];?></textarea>
                                 </div>
                             <div class="form-group">
                                <label>Keterangan Deskripsi</label>
                                <textarea class="form-control"  name="ket_web1"  cols="40" rows="5" value=""><?php echo $a['ket_web1'];?></textarea>
                            </div>
                            </div>
                             <div class="form-group">
                                <label>Keterangan WEB</label>
                                <textarea class="form-control"  name="ket_web"  cols="40" rows="5" value=""><?php echo $a['ket_web'];?></textarea>
                        


                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>

                            </form>
                            <?php 
   } 
  
?>
                                <!-- /.form -->
                            </div>
                                <!-- /.col sm 4 -->

                    </div>
                    <!-- /.col lg 12-->

                </div>
     
       </div>
      <!-- End of Main Content -->

 ?>
<?php
include "footer.php";
?>
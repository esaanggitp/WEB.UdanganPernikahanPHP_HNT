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
                                edit Data slid
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
  $query = mysqli_query($conect, "SELECT * FROM slid WHERE id_slid='$id'"); 
  while ( $a = mysqli_fetch_array( $query)) {

?>
                            <form action="update1.php" method="post" enctype="multipart/form-data" role="form">
                          
                            <div class="form-group">
                                <label>Nama slid</label>
                                <input type="hidden" name="id" value="<?php echo $a['id_slid']; ?>">
                                <input type="text" class="form-control"  name="nama_slid"  maxlength="50" autocomplete="off" autofocus value="<?php echo $a['nama_slid']; ?>">
                            </div>
                    
                      
           

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

 <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include "footer.php";
?>
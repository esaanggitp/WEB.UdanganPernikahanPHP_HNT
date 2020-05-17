<?php
include "head.php";
?>
<?php
include "nav.php";
?>

        <div class="container-fluid">

          <!-- Page Heading -->
         
                <!-- .row -->
                <!-- Page Heading  breadcumb-->
                <div class="row">
                    <div class="col-lg-12">
                        <h3>
                       
                           </a>

                        </h3>
                        <ol class="breadcrumb">
                           
                            <li class="active">
                                Daftar slid
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <!-- .row -->
                <div class="row">

                <!-- .col lg 12 -->
                    <div class="col-lg-12">
                    <!-- /.tabel responsive -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama </th>
                                    
                                                <th>gambar</th>
                                        

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";
                                        $batas = 10; /*batas tampilan setiap halaman*/
                                        if ( empty( $pg ) ) {
                                        $posisi = 0;
                                        $pg = 1;
                                        } else {
                                        $posisi = ( $pg - 1 ) * $batas;
                                        }
                                        /*Jika variabel $pg kosong maka akan menampilkan halaman pertama dengan batas baris 10*/

                                        $ambildata=mysqli_query($conect, "select*from slid order by id_slid desc limit $posisi, $batas");
                                        $jumlah=mysqli_num_rows($ambildata);  /*mysql_num_rows untuk menghitung total baris di tabel databse*/
                                        if($jumlah == 0){  //jika tidak ada data
                                            ?>
                                        <tr>
                                            <td colspan="6">Tidak Terdapat Data</td>
                                        </tr>
                                        <?php
                                        }else{
                                        //jika ada data di tb_brand
                                        while($a=mysqli_fetch_array($ambildata)){ /*mysql_fetch array untuk mengambil data di setiap field di tabel databse*/
                                        ?>

                                        <tr>
                                            <td><?php echo $posisi=$posisi+1;?></td>
                                            <td><?php echo $a['nama_slid'];?></td>
                                         
                                            <td><img src="<?php echo $hostname;?>/gambar/slid/<?php echo $a['gambar_slid'];?>" 
                                            class="img-thumbnail" style="max-width:100px; max-height:100px;"></td>
                                           
                                            <td>
                                            <a href="edit_slid.php?id=<?php echo $a['id_slid']; ?>" title="Edit data"><button class="btn btn-info btn-sm">Edit Text</button> </a>
                                            <a href="edit_slid_gambar.php?id=<?php echo $a['id_slid']; ?>" title="Edit data"><button class="btn btn-info btn-sm">Edit Gambar</button> </a>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                        }
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.tabel responsive -->

                                <div class="text-center">
                       
                                </div>
                            </div>

                    </div>
                    <!-- /.col lg 12-->

                <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php
include "footer.php";

    ?> 
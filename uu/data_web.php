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
                      
                        <ol class="breadcrumb">
                           Data WEBSITE
                            <li class="active">
                            
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
                                
                                                <th>Nama web </th>
                                                <th>Nomor WA </th>
                                                <th>Keterangan wa</th>
                                                <th>Keterangan deskripsi</th>
                                                <th>Keterangan Web</th>
                                          
                                                <th>Edit</th>

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

                                        $ambildata=mysqli_query($conect, "select*from web order by id_web desc limit $posisi, $batas");
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
                                            <input type="hidden" name="id_web" value="<?php echo $a['id_web']; ?>">
                                            <td><?php echo $posisi=$posisi+1;?></td>
                                       
                                            <td><?php echo $a['nama_web'];?></td>
                                           <td><?php echo $a['no_hp'];?></td>
                                           <td><?php echo $a['ket_wa'];?></td>
                                           <td><?php echo $a['ket_web1'];?></td>
                                           <td><?php echo $a['ket_web'];?></td>
                                        

                                           <td> <a href="edit_web.php?id=<?php echo $a['id_web']; ?>">EDIT</a></td>
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
<br>
                                <div class="text-center">
                                
                                </div>
                            </div>

                    </div>
                    <!-- /.col lg 12-->

                
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content --><br><br><br><br><br><br><br><br><br><br><br>
<?php
include "footer.php";

    ?> 
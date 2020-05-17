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
                            Daftar admin
                    

                        </h3>
                        <ol class="breadcrumb">
                           
                            <li class="active">
                                Daftar admin
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
                                                <th>Email </th>
                                                <th>Nama Admin </th>

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

                                        $ambildata=mysqli_query($conect, "select*from admin order by id_admin desc limit $posisi, $batas");
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
                                            <td><?php echo $a['nama_admin'];?></td>
                                           <td><?php echo $a['namaa'];?></td>
                                            
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
                                    <?php
                                //script paging, untuk menampikan setiap halaman
                                $jml_data = mysqli_num_rows(mysqli_query($conect, "select*from admin order by id_admin desc"));
                                $JmlHalaman = ceil($jml_data/$batas); //ceil digunakan untuk pembulatan keatas
                                if($jml_data != 0){
                                if ( $pg > 1 ) {
                                $link = $pg-1;
                                $prev = "<a href='?pg=$link'><button name='prev' class='btn btn-primary btn-sm'>Prev</button></a> ";
                                } else {
                                $prev = "<button name='prev' class='btn btn-default btn-sm'>Prev </button> ";
                                }
                                $nmr = '';
                                for ( $i = 1; $i<= $JmlHalaman; $i++ ){

                                if ( $i == $pg ) {
                                $nmr .= "<button name='prev' class='btn btn-primary btn-sm'>$i</button> ";
                                } else {
                                $nmr .= "<a href='?pg=$i'><button name='prev' class='btn btn-default btn-sm'>$i</button></a> ";
                                }
                                }
                                if ( $pg < $JmlHalaman ) {
                                $link = $pg + 1;
                                $next = "<a href='?pg=$link'><button name='prev' class='btn btn-primary btn-sm'>Next</button></a> ";
                                } else {
                                $next = "<button name='prev' class='btn btn-default btn-sm'>Next</button> ";
                                }
                                echo $prev.$nmr.$next;
                                ?>
                                <br><br>
                                <span class="text-muted">Menampilkan <?php echo $jumlah; ?> dari <?php echo $jml_data; ?> Record </span>
                                <?php
                                }
                                ?>
                                </div>
                            </div>

                    </div>
                    <!-- /.col lg 12-->

                
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content --><br><br><br><br><br><br><br><br>
<?php
include "footer.php";

    ?> 
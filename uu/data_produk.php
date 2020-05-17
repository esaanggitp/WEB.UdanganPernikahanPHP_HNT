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
                            Daftar Produk
                            <a href="tambah_produk.php" title="Input data"><button name="input" class="btn btn-primary pull-right">Tambah Data</button></a>

                        </h3>
                        <ol class="breadcrumb">
                            <li class="active">
                                Daftar Produk
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
                                                <th>Kode</th>
                                                <th>gambar</th>
                                                <th>deskripsi</th>
                                                <th>harga</th>

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

                                        $ambildata=mysqli_query($conect, "select*from produk order by id_produk desc limit $posisi, $batas");
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
                                            <td><?php echo $a['nama_produk'];?></td>
                                            <td><?php echo nl2br($a['kode_produk']);?></td>
                                            <td><img src="<?php echo $hostname;?>/gambar/<?php echo $a['gambar_produk'];?>" 
                                            class="img-thumbnail" style="max-width:100px; max-height:100px;"></td>
                                            <td><?php echo nl2br($a['deskripsi_produk']);?></td>
                                            <td><?php echo nl2br($a['harga']);?></td>
                                            <td><a href="hapus_produk.php?id_bank=<?php echo $a['id_produk'];?>" onclick="return confirm('Yakin akan meghapus data ini')" title="Hapus data"><button class="btn btn-danger btn-sm">Hapus</button></a>
                                            <a href="edit_produk.php?id=<?php echo $a['id_produk']; ?>" title="Edit data"><button class="btn btn-info btn-sm">Edit Text</button> </a>
                                            <a href="edit_produk_gambar.php?id=<?php echo $a['id_produk']; ?>" title="Edit data"><button class="btn btn-info btn-sm">Edit Gambar</button> </a>
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
                                    <?php
                                //script paging, untuk menampikan setiap halaman
                                $jml_data = mysqli_num_rows(mysqli_query($conect, "select*from produk order by id_produk desc"));
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
      <!-- End of Main Content -->
<?php
include "footer.php";

    ?> 
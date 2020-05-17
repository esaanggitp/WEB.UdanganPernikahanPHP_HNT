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
                            Tambah Data produk
                            <a href="data_produk.php" title="Input data"><button name="input" class="btn btn-default pull-right">Back</button></a>

                        </h3>
                        <ol class="breadcrumb">
                          
                            <li class="active">
                                Tambah Data produk
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

                            <form action="proses_produk.php" method="post" enctype="multipart/form-data" role="form">
                          
                            <div class="form-group">
                                <label>Nama produk</label>
                                <input type="text" class="form-control" placeholder="Nama produk" name="nama"  maxlength="50" autocomplete="off" autofocus>
                            </div>
                    
                            <div class="form-group">
                                <label>Kode produk</label>
                                <textarea class="form-control" placeholder="kode produk" name="keterangan" rows="5"></textarea>
                            </div>
                     
                            <div class="form-group">
                                <label>gambar produkk</label>
                                <input type="file" class="form-control-file" name="foto" accept=".jpg, .png" >
                            </div>
                  

                            <div class="form-group">
                                <label>deskripsi produk</label>
                                <textarea class="form-control" placeholder="deskripsi_produk" name="deskripsi_produk" rows="5"></textarea>
                            </div>
               
                               <div class="form-group">
                                <label>harga produk</label>
                                <textarea class="form-control" placeholder="harga_produk" name="harga" rows="5"></textarea>
                            </div>
        


                            <button type="submit" name="simpan" class="btn btn-success">Simpan</button>

                            </form>
                                <!-- /.form -->
                            </div>
                                <!-- /.col sm 4 -->

                    </div>
                    <!-- /.col lg 12-->

                </div>
     
       </div>
      <!-- End of Main Content -->

<?php
include "footer.php";


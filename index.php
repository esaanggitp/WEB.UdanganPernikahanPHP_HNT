<?php
include "koneksi.php";
?>
 <?php
 $web1=mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM web where id_web='1'"));
 ?>
  <?php
 $slid1=mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM slid where id_slid='1'"));
  $slid2=mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM slid where id_slid='2'"));
 $slid3=mysqli_fetch_array(mysqli_query($conect, "SELECT * FROM slid where id_slid='3'"));
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title><?php echo $web1['nama_web'];?></title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/heroic-features.css" rel="stylesheet">
 
</head>

<body id="navbarResponsive" style=" margin: auto; text-align: center; width: 568px;">
  <nav class="navbar navbar-expand-lg fixed-top" id="hd">
    <div class="container">
      <a class="navbar-brand"><?php echo $web1['nama_web'];?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a id="p" class="link" href="#">Home
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <br><br><br>
  <div class='csslider1 autoplay ' >
    <input name="cs_anchor1" id='cs_slide1_0' type="radio" class='cs_anchor slide' >
    <input name="cs_anchor1" id='cs_slide1_1' type="radio" class='cs_anchor slide' >
    <input name="cs_anchor1" id='cs_slide1_2' type="radio" class='cs_anchor slide' >
    <input name="cs_anchor1" id='cs_play1' type="radio" class='cs_anchor' checked>
    <input name="cs_anchor1" id='cs_pause1' type="radio" class='cs_anchor' >
    <ul>
      <div style="width: 100%; visibility: hidden; font-size: 0px; line-height: 0;">
        <img src="<?php echo $hostname;?>/gambar/slid/<?php echo $slid1['gambar_slid'];?>" style="width: 100%;">
      </div>

      <li class='num0 img' >
         <a href="#" target=""><img src='<?php echo $hostname;?>/gambar/slid/<?php echo $slid1['gambar_slid'];?>' alt='Buns' title='<?php echo $slid1['nama_slid'];?>' /> </a> 
      </li>
      <li class='num1 img'>
         <a href="#" target=""><img src='<?php echo $hostname;?>/gambar/slid/<?php echo $slid2['gambar_slid'];?>' style="width: 100%" alt='Buns' title='<?php echo $slid2['nama_slid'];?>' style='width: 100%' /> </a> 
      </li>
      <li class='num2 img'>
         <a href="#" target=""><img src='<?php echo $hostname;?>/gambar/slid/<?php echo $slid3['gambar_slid'];?>' alt='Lemon pie' title='<?php echo $slid3['nama_slid'];?>' /> </a> 
      </li>

    
    </ul>
    <div class='cs_description'>
      <label class='num0'>
        <span class="cs_title"><span class="cs_wrapper"><?php echo $slid1['nama_slid'];?></span></span>
      </label>
      <label class='num1'>
        <span class="cs_title"><span class="cs_wrapper"><?php echo $slid2['nama_slid'];?></span></span>
      </label>
      <label class='num2'>
        <span class="cs_title"><span class="cs_wrapper"><?php echo $slid3['nama_slid'];?></span></span>
      </label>
  
    </div>
    
    <div class='cs_arrowprev'>
      <label class='num0' for='cs_slide1_0'></label>
      <label class='num1' for='cs_slide1_1'></label>
      <label class='num2' for='cs_slide1_2'></label>
      
    </div>
    <div class='cs_arrownext'>
      <label class='num0' for='cs_slide1_0'></label>
      <label class='num1' for='cs_slide1_1'></label>
      <label class='num2' for='cs_slide1_2'></label>
    
    </div>
    
    <div class='cs_bullets'>
      <label class='num0' for='cs_slide1_0'>
        <span class='cs_point'></span>
        <span class='cs_thumb'><img src='<?php echo $hostname;?>/gambar/slid/<?php echo $slid1['gambar_slid'];?>' alt='Buns' title='Buns' style='width: 100%' /></span>
      </label>
      <label class='num1' for='cs_slide1_1'>
        <span class='cs_point'></span>
        <span class='cs_thumb'><img src='<?php echo $hostname;?>/gambar/slid/<?php echo $slid2['gambar_slid'];?>' alt='Croissant' title='Croissant' style='width: 100%'/></span>
      </label>
      <label class='num2' for='cs_slide1_2'>
        <span class='cs_point'></span>
        <span class='cs_thumb'><img src='<?php echo $hostname;?>/gambar/slid/<?php echo $slid3['gambar_slid'];?>' alt='Lemon pie' title='Lemon pie' style='width: 100%' /></span>
      </label>
        
    </div>
    </div>
    </div>
    <!-- End cssSlider.com -->
  <br><br>
  <div>
     <a class="card-title" id="demoFont"><?php echo $web1['ket_web1'];?> <br>  <?php echo $web1['ket_web'];?></a><br>
     <a href="https://api.whatsapp.com/send?phone=<?php echo $web1['no_hp'];?>&text=<?php echo $web1['ket_wa'];?>"><img src='gambar/wa.png' class="wa"></a>
    
  </div>

<br>
 <?php
 $pg = isset( $_GET['pg'] ) ? $_GET['pg'] : "";
 $batas = 100000; 
 if ( empty( $pg ) ) {
 $posisi = 0;
$pg = 1;
 } else {
 $posisi = ( $pg - 1 ) * $batas;
}
?>
  <?php
 $ambildata=mysqli_query($conect, "select*from produk order by id_produk desc limit $posisi, $batas");
  $jumlah=mysqli_num_rows($ambildata); 
if($jumlah == 0){
?>
<div> kosong</div>
<?php
}else{                               
while($a=mysqli_fetch_array($ambildata)){
?>
  <div class="csslider3">
          <img class="card-img-top" src="<?php echo $hostname;?>/gambar/<?php echo $a['gambar_produk'];?>" width="100%" height="100%" alt="">

          <div class="card-body">
            <h5 class="card-title" id="demoFont"><?php echo $a['nama_produk'];?></h5>
            <h5 class="card-title" id="demoFont"><?php echo $a['kode_produk'];?></h5>
            <h5 id="demoFont"><?php echo $a['deskripsi_produk'];?> </h5>
             <h5 id="demoFont">Harga Rp.<?php echo $a['harga'];?> </h5>
            <p class="card-text"></p>
          </div>
          <div class="csslider4">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $web1['no_hp'];?>&text=<?php echo $web1['ket_wa'];?> <?php echo $a['kode_produk'];?>" class="btn btn-primary">Pesan sekarang!</a>
          </div>        
 </div>
 <?php
}
 }
 ?>

 <br><br><br>
  <footer class="py-5" id="ft">
    <div class="container ">
      <p class="m-0 text-center text-black">Copyright &copy; <?php echo(int)date('Y');?> <?php echo $web1['nama_web'];?> </p>
    </div>
  </footer>
    </div>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>

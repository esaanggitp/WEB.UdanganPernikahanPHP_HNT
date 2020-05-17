<?php
include "head.php";
?>
<?php
include "nav.php";
?>

        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        
          </div>


          <div class="row">
<?php
$aa=mysqli_query($conect, "select*from admin order by id_admin ");
$a=mysqli_fetch_array($aa)
?>
<div>
           <h3>SELAMAT DATANG <td></td><h3>

       </div> 
          <div class="row">

    

           

       
              <div class="card shadow mb-4"></div>

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
<?php
include "footer.php";

     
<?php
include '../config/koneksi.php';
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">





  </head>


  <!--ini awal content-->
  <h3><p class="text-center mt-4">Data Tenaga Medis Klinik</p></h3>

    <center><table class=" mt-4" width="1000px" border="1">
        <tr>
       <td><center>No</td>
   		 <td><center>Nama</td>
   		 <td><center>Alamat</td>
       <td><center>Nomor</td>
         </tr>

         <?php
        	  $query = mysqli_query($conn, "SELECT * FROM tenagamedis");
        	  while($row = mysqli_fetch_array($query)){
        	  ?>
            <tr>
            <td><center><?php echo $row['id'] ?></td>
            <td><center><?php echo $row['nama'] ?></td>
            <td><center><?php echo $row['alamat'] ?></td>
            <td><center><?php echo $row['nomor'] ?></td>
             </tr>
  <?php
  }
    ?>




    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename= Data_tenaga_klinik.xls");
    ?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>

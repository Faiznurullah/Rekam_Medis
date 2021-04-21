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
  <h3><p class="text-center mt-4">Data Rekam Medis Klinik</p></h3>

    <center><table class=" mt-4" width="1000px" border="1">
        <tr>
       <td><center>No</td>
   		 <td><center>Nama</td>
   		 <td><center>Tenaga Medis</td>
   		 <td><center>Tanggal Berobat</td>
   		 <td><center>Keluhan</td>
       <td><center>Diagnosa</td>
       <td><center>Obat</td>
         </tr>

         <?php
        	  $query = mysqli_query($conn, "SELECT * FROM rekammedis");
        	  while($row = mysqli_fetch_array($query)){
        	  ?>
            <tr>
            <td><center><?php echo $row['id'] ?></td>
            <td><center><?php echo $row['nama_pasien'] ?></td>
            <td><center><?php echo $row['nama_tenaga'] ?></td>
            <td><center><?php echo $row['tanggal'] ?></td>
            <td><center><?php echo $row['keluhan'] ?></td>
            <td><center><?php echo $row['diagnosa'] ?></td>
            <td><center><?php echo $row['obat'] ?></td>
             </tr>
  <?php
  }
    ?>




    <?php
    header("Content-type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename= Data_Rekam_klinik.xls");
    ?>




    <!--ini akhir content bosq-->

        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
      </body>
    </html>

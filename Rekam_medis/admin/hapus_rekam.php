<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM rekammedis WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tab_rekam.php?hapus=sukses');
}
else{
		header('location: tab_rekam.php?hapus=gagal');
}

?>

<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM tenagamedis WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tab_medis.php?hapus=sukses');
}
else{
		header('location: tab_medis.php?hapus=gagal');
}

?>

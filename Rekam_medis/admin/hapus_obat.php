<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM obat WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tab_obat.php?hapus=sukses');
}
else{
		header('location: tab_obat.php?hapus=gagal');
}

?>

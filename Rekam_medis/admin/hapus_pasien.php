<?php
include '../config/koneksi.php';
$delete = mysqli_query($conn, "DELETE FROM pasien WHERE id = '".$_GET['id']."'");

 if($delete){
	header('location: tab_pasien.php?hapus=sukses');
}
else{
	echo "Gagal";
}

?>

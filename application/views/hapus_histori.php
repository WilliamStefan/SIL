<?php
	$ID = $_GET['id'];
	
	include 'sql_connect.php';

	$query = "DELETE FROM histori_penjualan WHERE id='$ID'";
	
	if (!mysqli_query($con, $query)) {
		echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Gagal!</strong> Penghapusan histori penjualan gagal dilakukan. Error:'.mysqli_error($con).' </div>';
		die();
	}
	else {
		echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Sukses!</strong> Histori penjualan pada tanggal ' . $tanggal . ' berhasil dihapus</div>';
	}
	mysqli_close($con);
	header('Location:read_histori');
?>
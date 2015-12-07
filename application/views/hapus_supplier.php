<?php
	$ID = $_GET['id'];
	
	include 'sql_connect.php';

	$query = "DELETE FROM supplier WHERE id_supplier='$ID'";
	
	if (!mysqli_query($con, $query)) {
		echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Gagal!</strong> Penghapusan supplier gagal dilakukan. Error:'.mysqli_error($con).' </div>';
		die();
	}
	else {
		echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Sukses!</strong> Supplier dengan ID ' . $id . ' dan nama ' . $nama . ' berhasil dihapus</div>';
	}
	mysqli_close($con);
	header('Location:read_supplier');
?>
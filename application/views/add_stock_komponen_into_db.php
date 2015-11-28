<?php
	$ID = $_GET["id"];
	$nama = $_POST["input-nama-komponen"];
	$stok_tersedia = $_POST["input-stok-tersedia"];
	// $stok_minimal = $_POST["input-stok-minimal"];
	
	include 'sql_connect.php';

	$query = "UPDATE komponen SET nama_komponen='$nama', stok_tersedia='$stok_tersedia' WHERE id_komponen='$ID'";

	if (!mysqli_query($con, $query)) {
		echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Gagal!</strong> Pengeditan komponen gagal dilakukan. Error:'.mysqli_error($con).' </div>';
		die();
	}
	else {
		echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Sukses!</strong> Komponen dengan ID ' . $ID . ' dan nama ' . $nama . ' berhasil diedit</div>';
	}
	mysqli_close($con);
	header('Location:read_komponen');
?>
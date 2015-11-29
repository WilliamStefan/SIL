<?php
	$ID = $_GET["id"];
	$nama = $_POST["input-nama-supplier"];
	$lokasi = $_POST["input-lokasi"];
	$waktu_pengiriman = $_POST["input-waktu-pengiriman"];
	// $komponen = $_POST["input-komponen"];

	include 'sql_connect.php';

	$query = "UPDATE supplier SET nama_supplier='$nama', lokasi_supplier='$lokasi', waktu_pengiriman='$waktu_pengiriman' WHERE id_supplier='$ID'";

	if (!mysqli_query($con, $query)) {
		echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Gagal!</strong> Pengeditan supplier gagal dilakukan. Error:'.mysqli_error($con).' </div>';
		die();
	}
	else {
		echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Sukses!</strong> Supplier dengan ID '. $id . ' dan nama ' . $nama . ' berhasil diedit</div>';
	}
	mysqli_close($con);
	header('Location:read_supplier');
?>
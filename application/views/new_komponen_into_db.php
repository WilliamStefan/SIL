<?php
	$ID = $_POST["input-ID-komponen"];
	$nama = $_POST["input-nama-komponen"];
	$stok_tersedia = $_POST["input-stok-tersedia"];
	$stok_minimal = $_POST["input-stok-minimal"];

	include 'sql_connect.php';

	// Insert into barang
	$query = "INSERT INTO komponen(id, nama, stok_tersedia, stok_minimal)
	VALUES ('$ID', '$nama', '$stok_tersedia', '$stok_minimal')";

	if (!mysqli_query($con, $query)) {
		echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Gagal!</strong> Komponen gagal ditambahkan. Error:'.mysqli_error($con).' </div>';
		die();
	}
	else {
		echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Sukses!</strong> Komponen dengan ID ' . $ID . ' dan nama '. $nama .' berhasil ditambahkan</div>';
	}




	mysqli_close($con);
	header('Location:create_new_komponen');
?>
<?php
	$ID = $_GET["id"];
	$tanggal = $_POST["input-tanggal"];
	$pembeli = $_POST["input-pembeli"];
	$komponen = $_POST["input-komponen"];
	$jumlah_komponen = $_POST["input-jumlah"];
	$harga = $_POST["input-harga"];

	include 'sql_connect.php';

	$query = "UPDATE histori_penjualan SET tanggal='$tanggal', pembeli='$pembeli', komponen='$komponen', jumlah_komponen='$jumlah_komponen', harga='$harga' WHERE id='$ID'";

	if (!mysqli_query($con, $query)) {
		echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Gagal!</strong> Pengeditan histori gagal dilakukan. Error:'.mysqli_error($con).' </div>';
		die();
	}
	else {
		echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Sukses!</strong> Histori penjualan tanggal '. $tanggal . ' berhasil diedit</div>';
	}
	mysqli_close($con);
	header('Location:read_histori');
?>
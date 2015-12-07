<?php
	$tanggal = $_POST["input-tanggal"];
	$pembeli = $_POST["input-pembeli"];
	$komponen = $_POST["input-komponen"];
	$jumlah_komponen = $_POST["input-jumlah"];
	// $harga = $_POST["input-harga"];

	include 'sql_connect.php';

	$query = "INSERT INTO histori_penjualan(tanggal, pembeli, komponen, jumlah_komponen)
	VALUES ('$tanggal', '$pembeli', '$komponen', '$jumlah_komponen')";

	if (!mysqli_query($con, $query)) {
		echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Gagal!</strong> Komponen gagal ditambahkan. Error:'.mysqli_error($con).' </div>';
		die();
	}
	else {
		echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Sukses!</strong> Histori penjualan tanggal '. $tanggal . ' berhasil ditambahkan</div>';
	}
	
	// Update jumlah komponen
	// Baru bisa apabila input pengguna maksimal 1 id_komponen
	$queryAmbilJumlahKomponen = "SELECT stok_tersedia from komponen WHERE id_komponen='$komponen'";
	
	$ambilJumlahKomponen = mysqli_query($con, $queryAmbilJumlahKomponen);
	
	if(mysqli_num_rows($ambilJumlahKomponen) == 0) {
		echo '<h4>Tidak ada barang dengan id_komponen' .$komponen.' </h4>';
		die();
	} else {
		while($row_read_jumlah = mysqli_fetch_array($ambilJumlahKomponen)) {
			$jumlahKomponen = (int) $row_read_jumlah['stok_tersedia'];
		}
	}
	
	$newJumlahKomponen = $jumlahKomponen - $jumlah_komponen;
	
	$queryUpdateJumlah = "UPDATE komponen SET stok_tersedia='$newJumlahKomponen' WHERE id_komponen='$komponen'";
	$updateJumlah = mysqli_query($con, $queryUpdateJumlah);
	
	mysqli_close($con);
	header('Location:create_new_histori');
?>
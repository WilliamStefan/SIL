<?php
$ID = $_POST["input-ID-supplier"];
$nama = $_POST["input-nama-supplier"];
$lokasi = $_POST["input-lokasi"];
$waktu_pengiriman = $_POST["input-waktu-pengiriman"];
$komponen = $_POST["input-komponen"];

include 'sql_connect.php';

// Insert into menu
$sql="INSERT INTO supplier(id, nama, lokasi, waktu_pengiriman, komponen)
VALUES ('$ID', '$nama', '$lokasi', '$waktu_pengiriman', '$komponen')";

if (!mysqli_query($con, $sql)) {
	echo '<div class="alert alert-danger alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Gagal!</strong> Komponen gagal ditambahkan. Error:'.mysqli_error($con).' </div>';
	die();
}
else {
	echo '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="close"><span aria-hidden="true">&times;</span></button> <strong>Sukses!</strong> Supplier dengan ' . $ID . 'dan nama '. $nama .'berhasil ditambahkan</div>';
}
mysqli_close($con);
header('Location:create_new_supplier');
?>
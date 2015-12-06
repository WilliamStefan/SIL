<?php
// forecasting penjulan bulan X: 	jumlah penjualan pada bulan okt,nov,des tahun lalu
//									dibagi jumlah penjualan pada bulan okt,nov,des 2 tahun lalu
//									dikali jumlah penjualan bulan X tahun lalu


function countSold($component_id, $month, $year){
	include '/../views/sql_connect.php';

	// $month = date('m');
	// $year = date('Y');
	// echo 'tahun: '.$year;

	$query = "SELECT SUM(jumlah_komponen) as sum FROM histori_penjualan WHERE DATE_FORMAT(tanggal,'%m') = '".$month."' and komponen='".$component_id."'";
	$ambil_jumlah = mysqli_query($con, $query);

	if(mysqli_num_rows($ambil_jumlah) == 0) {
		echo '
			<h1>Tidak ada komponen dengan id: ' .$component_id. '</h1>
		';
		die();
	}
	else {
		while($row_ambil_jumlah = mysqli_fetch_array($ambil_jumlah)) {
			return $row_ambil_jumlah['sum'];
		}
	}
	mysqli_close($con);
}
function calculateCoefisien($component_id, $year){
	$yearBefore1 = 0 + countSold($component_id, 10, $year-1);
	$yearBefore1 = $yearBefore1 + countSold($component_id, 11, $year-1);
	$yearBefore1 = $yearBefore1 + countSold($component_id, 12, $year-1);

	$yearBefore2 = 0 + countSold($component_id, 10, $year-2);
	$yearBefore2 = $yearBefore1 + countSold($component_id, 11, $year-2);
	$yearBefore2 = $yearBefore1 + countSold($component_id, 12, $year-2);

	return $yearBefore1/$yearBefore2;	
}

function forecast($component_id, $month, $year){
	$fc = countSold($component_id, $month, $year-1);
	$fc = $fc * calculateCoefisien($component_id, $year);
	return $fc;
}

function getDeliveryTime($supplier_id){
	include '/../views/sql_connect.php';

	$query = "SELECT waktu_pengiriman FROM supplier WHERE id_supplier='".$supplier_id."'";
	$delTime = mysqli_query($con, $query);

	if(mysqli_num_rows($delTime) == 0) {
		echo '
			<h1>Tidak ada supplier dengan id: ' .$supplier_id. '</h1>
		';
		die();
	}
	else {
		while($row_ambil_jumlah = mysqli_fetch_array($delTime)) {
			return $row_ambil_jumlah['waktu_pengiriman'];
		}
	}
	mysqli_close($con);	
}
// function calculateMinStok($c_id, $s_id){
// 	$jumlahTerjualperBulan = countSold($c_id);
// 	$lamaPengiriman = getDeliveryTime($s_id);
// 	return $jumlahTerjualperBulan * $lamaPengiriman;
// }

function getSupplier($id_komponen){
	include '/../views/sql_connect.php';

	$query = "SELECT id_supplier FROM supplierbarang WHERE id_barang='".$id_komponen."'";
	$delTime = mysqli_query($con, $query);

	if(mysqli_num_rows($delTime) == 0) {
		echo '
			<h1>Tidak ada supplier dengan id: ' .$id_komponen. '</h1>
		';
		die();
	}
	else {
		while($row_ambil_jumlah = mysqli_fetch_array($delTime)) {
			return $row_ambil_jumlah['id_barang'];
		}
	}
	mysqli_close($con);	
}
?>

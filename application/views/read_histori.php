<?php
	include 'sql_connect.php';
	include 'print_tanggal.php';
	
	$query = "SELECT * FROM histori_penjualan ORDER BY id ASC";
	$read_histori = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
	<!-- CSS -->
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/main.css" rel="stylesheet">

	<!-- Script -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>

	<head>
		<title>STOCK MANAGER</title>
	</head>
	
	<body>
		<div class="container">
			<div id="header">
				<h1 class="text-center">Lihat Histori Penjualan</h1>
			</div>

			<div id="content">
				<div class="row">
					<div id="toBuyTable" class="col-md-12">
						<?php
							if(mysqli_num_rows($read_histori) == 0) {
								echo'
									<center>
										<h2> Basis data histori penjualan kosong</h2>
									</center>
								';
							}
							else {
								echo'
									<table class="table table-bordered table-striped table-hover table-condensed table-responsive">	
										<tr>
											<th>Tanggal</th>
											<th>Pembeli</th>
											<th>Komponen</th>
											<th>Jumlah Komponen</th>
											<th>Harga</th>
										</tr>
								';		
								
								while($row_read_histori = mysqli_fetch_array($read_histori)) {
								echo'
										<tr>
											<td>' .PrintTanggal($row_read_histori['tanggal']). '</td>
											<td>' .$row_read_histori['pembeli']. '</td>
											<td>' .$row_read_histori['komponen']. '</td>
											<td>' .$row_read_histori['jumlah_komponen']. '</td>
											<td>' .$row_read_histori['harga']. '</td>
										</tr>
								';
								}
								
								echo'
									</table>
								';
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
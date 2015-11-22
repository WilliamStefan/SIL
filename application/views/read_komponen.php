<?php
	include 'sql_connect.php';
	
	$query = "SELECT * FROM komponen ORDER BY id ASC";
	$read_komponen = mysqli_query($con, $query);
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
				<h1 class="text-center">Lihat Komponen</h1>
			</div>

			<div id="content">
				<div class="row">
					<div id="toBuyTable" class="col-md-12">
						<br>
						<?php
							if(mysqli_num_rows($read_komponen) == 0) {
								echo'
									<center>
										<h2> Basis data komponen kosong</h2>
									</center>
								';
							}
							else {
								echo'
									<table class="table table-bordered table-striped table-hover table-condensed table-responsive">	
										<tr>
											<th>ID komponen</th>
											<th>Nama komponen</th>
											<th>Stok tersedia</th>
											<th>Stok minimal</th>
											<th>Edit</th>
										</tr>
								';		
								
								while($row_read_komponen = mysqli_fetch_array($read_komponen)) {
									$ID = $row_read_komponen['id'];
									echo'
										<tr>
											<td>' .$row_read_komponen['id']. '</td>
											<td>' .$row_read_komponen['nama']. '</td>
											<td>' .$row_read_komponen['stok_tersedia']. '</td>
											<td>' .$row_read_komponen['stok_minimal']. '</td>
									';
						?>
											<td><a href="edit_komponen?id=<?php echo $ID; ?>">Edit</a></td>
										</tr>
						<?php	}
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
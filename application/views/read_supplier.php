<?php
	include 'sql_connect.php';
	
	$query = "SELECT * FROM supplier ORDER BY id ASC";
	$read_supplier = mysqli_query($con, $query);
?>

<div class="container">
	<div id="header">
		<h1 class="text-center">Lihat Supplier</h1>
	</div>

	<div id="content">
		<div class="row">
			<div id="toBuyTable" class="col-md-12">
				<br>
				<?php
					if(mysqli_num_rows($read_supplier) == 0) {
						echo'
							<center>
								<h2> Basis data supplier kosong</h2>
								
								<div class="col-md-offset-5 col-md-3">
									<br>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></div>
											<a href="create_new_supplier"><button type="button" class="btn btn-primary">Tambah supplier</button></a>
										</div>
									</div>
								</div>
							</center>
						';
					}
					else {
						echo'
							<div class="col-md-offset-9 col-md-3">
								<br>
								<div class="form-group">
									<div class="input-group">
										<div class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></div>
										<a href="create_new_supplier"><button type="button" class="btn btn-primary">Tambah supplier</button></a>
									</div>
								</div>
							</div>
							
							<table class="table table-bordered table-striped table-hover table-condensed table-responsive">	
								<tr>
									<th>ID supplier</th>
									<th>Nama supplier</th>
									<th>Lokasi</th>
									<th>Waktu pengiriman (hari)</th>
									<th>Komponen yang dijual</th>
									<th>Edit</th>
									<th>Hapus</th>
								</tr>
						';		
						
						while($row_read_supplier = mysqli_fetch_array($read_supplier)) {
							$ID = $row_read_supplier['id'];
							echo'
								<tr>
									<td>' .$row_read_supplier['id']. '</td>
									<td>' .$row_read_supplier['nama']. '</td>
									<td>' .$row_read_supplier['lokasi']. '</td>
									<td>' .$row_read_supplier['waktu_pengiriman']. '</td>
									<td>' .$row_read_supplier['komponen']. '</td>
							';
				?>
									<td><a href="edit_supplier?id=<?php echo $ID; ?>">Edit</a></td>
									<td><a href="hapus_supplier?id=<?php echo $ID; ?>" onclick="return confirm('Apakah Anda yakin menghapus supplier ini?');">Hapus</a></td>
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

<?php
	include 'sql_connect.php';
	include 'print_tanggal.php';
	
	$query = "SELECT * FROM histori_penjualan ORDER BY id ASC";
	$read_histori = mysqli_query($con, $query);
?>

<div class="container">
	<div id="header">
		<h1 class="text-center">Lihat Histori Penjualan</h1>
	</div>

	<div id="content">
		<div class="row">
			<div id="toBuyTable" class="col-md-12">
			<br>
				<?php
					if(mysqli_num_rows($read_histori) == 0) {
						echo'
							<center>
								<h2> Basis data histori penjualan kosong</h2>
								
								<div class="col-md-offset-5 col-md-3">
									<br>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></div>
											<a href="create_new_histori"><button type="button" class="btn btn-primary">Tambah histori penjualan</button></a>
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
										<a href="create_new_histori"><button type="button" class="btn btn-primary">Tambah histori penjualan</button></a>
									</div>
								</div>
							</div>
							
							<table class="table table-bordered table-striped table-hover table-condensed table-responsive">	
								<tr>
									<th>Tanggal</th>
									<th>Pembeli</th>
									<th>Komponen</th>
									<th>Jumlah Komponen</th>
									<th>Edit</th>
									<th>Hapus</th>
								</tr>
						';		
						
						while($row_read_histori = mysqli_fetch_array($read_histori)) {
							$ID = $row_read_histori['id'];
							echo'
								<tr>
									<td>' .PrintTanggal($row_read_histori['tanggal']). '</td>
									<td>' .$row_read_histori['pembeli']. '</td>
									<td>' .$row_read_histori['komponen']. '</td>
									<td>' .$row_read_histori['jumlah_komponen']. '</td>
							';
				?>
									<td><a href="edit_histori?id=<?php echo $ID; ?>">Edit</a></td>
									<td><a href="hapus_histori?id=<?php echo $ID; ?>" onclick="return confirm('Apakah Anda yakin menghapus histori ini?');">Hapus</a></td>
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

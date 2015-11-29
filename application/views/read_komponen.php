<?php
	include 'sql_connect.php';
	
	$query = "SELECT * FROM komponen ORDER BY id_komponen ASC";
	$read_komponen = mysqli_query($con, $query);
?>

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
								<div class="row">
									<div class="pull-right col-md-3">
										<br>
										<div class="form-group">
											<div class="input-group">
												<div class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></div>
												<a href="create_new_komponen"><button type="button" class="btn btn-primary">Tambah komponen</button></a>
											</div>
										</div>
									</div>
								</div>
							</center>
						';
					}
					else {
						echo'
							<div class="row">
								<div class="pull-right col-md-3">
									<br>
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></div>
											<a href="create_new_komponen"><button type="button" class="btn btn-primary">Tambah komponen</button></a>
										</div>
									</div>
								</div>
							</div>
							
							<table class="table table-bordered table-striped table-hover table-condensed table-responsive">	
								<tr>
									<th>ID komponen</th>
									<th>Nama komponen</th>
									<th>Stok tersedia</th>
									<th>Edit</th>
								</tr>
						';		
						
						while($row_read_komponen = mysqli_fetch_array($read_komponen)) {
							$ID = $row_read_komponen['id_komponen'];
							echo'
								<tr>
									<td>' .$row_read_komponen['id_komponen']. '</td>
									<td>' .$row_read_komponen['nama_komponen']. '</td>
									<td>' .$row_read_komponen['stok_tersedia']. '</td>
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

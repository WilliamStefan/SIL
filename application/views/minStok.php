<?php include '/../controllers/dss.php';?>
<div class="container">
	<div id="header">
		<h1 class="text-center">STOCK MANAGER</h1>
	</div>

	<div id="content">
		<div class="row">
			<div class="col-md-3">
				<h2>Min Stok</h2>
				<br>
			</div>
		</div>

		<!-- pilihan dss: <br><br>
		<select class="form-group">
			<option>cara 1</option>
			<option>cara 2</option>
		</select> -->
					
		<div class="row">
			<div id="toBuyTable" class="col-md-12">
				<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
					<tr>
						<th>Nama Barang</th>
						<th>Supplier</th>
						<th>Stok</th>
						<th>Min stok</th>
					</tr>
					<!-- ulang disini -->
					<?php foreach ($komponens as $komponenItem): ?>
					<tr>
						<td><?php echo $komponenItem['nama_komponen'] ?></td>
						<td>
							<select onclick="calculateMinStok('<?php echo $komponenItem['id_komponen']?>')" class="form-control" id="selectSupplier-<?php echo $komponenItem['id_komponen']?>"><?php 
									include '/../views/sql_connect.php';
									$query = "SELECT supplierbarang.id_supplier, supplier.waktu_pengiriman FROM supplierbarang, supplier WHERE supplier.id_supplier = supplierbarang.id_supplier AND  supplierbarang.id_barang='".$komponenItem['id_komponen']."'";
									$supp = mysqli_query($con, $query);
									if(mysqli_num_rows($supp) != 0) {
										while($row_ambil_jumlah = mysqli_fetch_array($supp)) {
											echo '<option value="'. $row_ambil_jumlah['waktu_pengiriman'] .'" id="supplier-'. $row_ambil_jumlah['id_supplier'] .'"> ' . $row_ambil_jumlah['id_supplier'] . ' </option>';
										}
									}
									mysqli_close($con);	
								?></select>
						</td>
						<td><?php echo $komponenItem['stok_tersedia'] ?></td>
						<td><?php 
							$month = date('m');
							$year = date('Y');
							$a = forecast($komponenItem['id_komponen'],$month, $year);
							echo '<div id="minStock-'.$komponenItem['id_komponen'].'">'. $a .' </div>';
						?></div></td>
						<td class="hidden"><?php 
							// store demand of each
							$year = date('Y');
							$month = date('m');
							$a = forecast($komponenItem['id_komponen'], $month, $year);
							echo '<div id="sold-'.$komponenItem['id_komponen'].'">'. $a .' </div>';
						?></div></td>
					</tr>
					<?php endforeach ?>
					<!-- ulang sampe sini -->
				</table>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$( "select" ).each(function( index ) {
		$id = this.id.substring(15);
		// alert($id);
	  	calculateMinStok($id);
	});
	function calculateMinStok($id_komponen){
		$selectedSupplierDelTime = $("#selectSupplier-"+$id_komponen).val();
		// $selectedSupplierDelTime = 1;
		$demand = $("#sold-"+$id_komponen).text();
		$("#minStock-"+$id_komponen).text(Math.ceil($demand / 23 * $selectedSupplierDelTime));
		// alert($selectedSupplierDelTime);
	};
</script>

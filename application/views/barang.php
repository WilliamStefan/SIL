<?php include '/../controllers/dss.php';?>
<div class="container">
	<div id="header">
		<h1 class="text-center">STOCK MANAGER</h1>
	</div>

	<div id="content">
		<div class="row">
			<div class="col-md-3">
				<h2>Barang</h2>
			</div>
			
			<div class="col-md-offset-6 col-md-3">
				<br>
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon"><i class="glyphicon glyphicon-plus"></i></div>
						<button type="button" class="btn btn-primary">Tambah barang</button>
					</div>
				</div>
			</div>
		</div>
					
		<div class="row">
			<div id="toBuyTable" class="col-md-12">
				<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
					<tr>
						<th>Nama barang</th>
						<th>Sisa stok</th>
						<th>Supplier</th>
						<th>Harga beli</th>
						<!--<th>Terjual</th>-->
						<th>Tambah stok</th>
						<th></th>
					</tr>
					<!-- start repeat -->
					<?php foreach ($komponens as $komponenItem): ?>
					<tr>
						<td><?php echo $komponenItem['nama_komponen'] ?></td>
						<td><?php echo $komponenItem['stok_tersedia'] ?></td>
						<td><?php echo $komponenItem['nama_supplier'] ?></td>
						<td><?php echo $komponenItem['harga_beli_komponen'] ?></td>
						<!--<td><?php 
							echo countSold($komponenItem['id_komponen']);
						?></td>-->
						<td><button type="button" class="btn btn-link"><i class="glyphicon glyphicon-plus"></i></button></td>
						<td><button type="button" class="btn btn-link">hapus</button></td>
					</tr>
					<?php endforeach ?>
					<!-- end repeat -->
				</table>
			</div>
		</div>
	</div>
</div>

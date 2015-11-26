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
					
		<div class="row">
			<div id="toBuyTable" class="col-md-12">
				<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
					<tr>
						<th>Nama Barang</th>
						<th>Stok</th>
						<th>Min stok</th>
					</tr>
					<!-- ulang disini -->
					<?php foreach ($komponens as $komponenItem): ?>
					<tr>
						<td><?php echo $komponenItem['nama'] ?></td>
						<td><?php echo $komponenItem['stok_tersedia'] ?></td>
						<td>itung rata2</td>
					</tr>
					<?php endforeach ?>
					<!-- ulang sampe sini -->
				</table>
			</div>
		</div>
	</div>
</div>

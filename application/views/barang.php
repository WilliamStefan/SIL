<!DOCTYPE html>
<html lang="en">
	<!-- CSS -->
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/main.css" rel="stylesheet">

	<!-- Script -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>

	<head>
		<title>STOCK MANAGER</title>
	</head>
	
	<body>
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
								<th>Tambah</th>
								<th></th>
							</tr>
							<tr>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td>1</td>
								<td><button type="button" class="btn btn-link"><i class="glyphicon glyphicon-plus"></i></button></td>
								<td><button type="button" class="btn btn-link">hapus</button></td>
							</tr>
							<tr>
								<td>2</td>
								<td>2</td>
								<td>2</td>
								<td>2</td>
								<td><button type="button" class="btn btn-link"><i class="glyphicon glyphicon-plus"></i></button></td>
								<td><button type="button" class="btn btn-link">hapus</button></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
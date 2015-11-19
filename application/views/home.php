<!DOCTYPE html>
<html lang="en">
	<!-- CSS -->
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/main.css" rel="stylesheet">
	<link href="../../assets/home.css" rel="stylesheet">

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
				<div id="form-anggaran" class="centered">
					<form class="form-inline">
						<div class="form-group">
							<label for="anggaran">Anggaran</label>	
							<input type="text" class="form-control" id="anggaranInput" placeholder="Contoh: 1.500.000">
						</div>
						<button type="submit" class="btn btn-primary">Cek</button>
					</form>
				</div>

				<div id="menu" class="centered">
					<button type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-plus"></i><br>Tambah transaksi</button>
					<button type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-stats"></i><br>Lihat stok min</button>
					<button type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-earphone"></i><br>Data supplier</button>
					<button type="button" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-gift"></i><br>Data barang</button>
				</div>
			</div>
		</div>
	</body>
</html>
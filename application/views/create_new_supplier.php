<!DOCTYPE html>
<html lang="en">
	<!-- CSS -->
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/main.css" rel="stylesheet">
	<link href="../../assets/home.css" rel="stylesheet">

	<!-- Script -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>

	<head>
		<title>STOCK MANAGER</title>
	</head>
	
	<body>
		<div class="container">
			<div id="header">
				<h1 class="text-center">Tambah Supplier Baru</h1>
			</div>

			<br><br>
			<div id="content">
				<div>
					<form id="form-new-supplier" class="form-horizontal" method="post" action="new_supplier_into_db">
						<div class="form-group">
							<label class="col-sm-5 control-label">ID supplier</label>
							<div class="col-sm-5">
								<input id="form-new-supplier-ID" type="text" name="input-ID-supplier" class="form-control" placeholder="Contoh: S-1" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Nama supplier</label>
							<div class="col-sm-5">
								<input id="form-new-supplier-nama" type="text" name="input-nama-supplier" class="form-control" placeholder="Contoh: Andi" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Lokasi</label>
							<div class="col-sm-5">
								<input id="form-new-supplier-lokasi" type="text" name="input-lokasi" class="form-control" placeholder="Contoh: Bandung" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Waktu pengiriman (hari)</label>
							<div class="col-sm-3">
								<input id="form-new-supplier-waktu-pengiriman" type="number" name="input-waktu-pengiriman" class="form-control" placeholder="Contoh: 10" min="0" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Komponen yang dijual</label>
							<div class="col-sm-5">
								<input id="form-new-supplier-komponen" type="text" name="input-komponen" class="form-control" placeholder="Contoh: Komponen 1, Komponen 2, Komponen 3" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-7">
								<button id="form-new-supplier-submit" type="submit" class="btn btn-default" onclick="return confirm('ID supplier tidak akan bisa diganti kemudian. Apakah Anda yakin?');">Masukkan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>
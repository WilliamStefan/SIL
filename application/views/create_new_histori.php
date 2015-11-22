<!DOCTYPE html>
<html lang="en">
	<!-- CSS -->
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/main.css" rel="stylesheet">
	<link href="../../assets/home.css" rel="stylesheet">
	<link href="../../assets/bootstrap-datepicker-1.5.0-dist/css/bootstrap-datepicker.css" rel="stylesheet">

	<!-- Script -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../assets/bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../../assets/bootstrap-datepicker-1.5.0-dist/js/bootstrap-datepicker.js"></script>
	

	<head>
		<title>STOCK MANAGER</title>
	</head>
	
	<body>
		<div class="container">
			<div id="header">
				<h1 class="text-center">Tambah Histori Penjualan Baru</h1>
			</div>

			<br><br>
			<div id="content">
				<div>
					<form id="form-new-histori" class="form-horizontal" method="post" action="new_histori_into_db">
						<div class="form-group">
							<label class="col-sm-5 control-label">Tanggal</label>
							<div class="col-sm-5">
								<input id="form-new-histori-tanggal" type="text" name="input-tanggal" class="form-control" placeholder="yyyy-mm-dd Contoh: 2001-12-31" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Pembeli</label>
							<div class="col-sm-5">
								<input id="form-new-histori-pembeli" type="text" name="input-pembeli" class="form-control" placeholder="Contoh: Budi" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">ID komponen</label>
							<div class="col-sm-3">
								<input id="form-new-histori-komponen" type="text" name="input-komponen" class="form-control" placeholder="Contoh: K-1" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Jumlah</label>
							<div class="col-sm-5">
								<input id="form-new-histori-jumlah" type="number" name="input-jumlah" class="form-control" placeholder="Contoh: 100" min="1" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Harga</label>
							<div class="col-sm-5">
								<input id="form-new-histori-harga" type="number" name="input-harga" class="form-control" placeholder="Contoh: 10000" min="0" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-7">
								<button id="form-new-histori-submit" type="submit" class="btn btn-default">Masukkan</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
	
	<script>
		$(function(){$("#form-new-histori-tanggal").datepicker({format: 'yyyy-mm-dd', todayHighlight: true, todayBtn: "linked"});});
	</script>
</html>
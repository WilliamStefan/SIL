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
				<h1 class="text-center">Edit Supplier</h1>
			</div>

			<br><br>
			<div id="content">
				<div>
					<?php
						include 'sql_connect.php';
						
						$ID = $_GET['id']; 
						$query = "SELECT * FROM supplier WHERE id='$ID'";
						$edit_supplier = mysqli_query($con, $query);
					?>
				
					<?php
						while($row_edit_supplier = mysqli_fetch_array($edit_supplier)) {
					?>
					
					<form id="form-new-supplier" class="form-horizontal" method="post" action="edit_supplier_into_db?id=<?php echo $ID; ?>">
						<div class="form-group">
							<label class="col-sm-5 control-label">ID supplier</label>
							<div class="col-sm-5">
								<input id="form-new-supplier-ID" type="text" name="input-ID-supplier" class="form-control" placeholder="Contoh: S-1" value="<?php echo $row_edit_supplier['id'];?>" disabled>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Nama supplier</label>
							<div class="col-sm-5">
								<input id="form-new-supplier-nama" type="text" name="input-nama-supplier" class="form-control" placeholder="Contoh: Andi" value="<?php echo $row_edit_supplier['nama'];?>" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Lokasi</label>
							<div class="col-sm-5">
								<input id="form-new-supplier-lokasi" type="text" name="input-lokasi" class="form-control" placeholder="Contoh: Bandung" value="<?php echo $row_edit_supplier['lokasi'];?>" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Waktu pengiriman (hari)</label>
							<div class="col-sm-3">
								<input id="form-new-supplier-waktu-pengiriman" type="number" name="input-waktu-pengiriman" class="form-control" placeholder="Contoh: 10" min="0" value="<?php echo $row_edit_supplier['waktu_pengiriman'];?>" required>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-5 control-label">Komponen yang dijual</label>
							<div class="col-sm-5">
								<input id="form-new-supplier-komponen" type="text" name="input-komponen" class="form-control" placeholder="Contoh: Komponen 1, Komponen 2, Komponen 3" value="<?php echo $row_edit_supplier['komponen'];?>" required>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-5 col-sm-7">
								<button id="form-new-supplier-submit" type="submit" class="btn btn-default">Masukkan</button>
							</div>
						</div>
					</form>
					
					<?php } ?>
				</div>
			</div>
		</div>
	</body>
</html>
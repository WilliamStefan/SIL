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
				<h1 class="text-center">Edit Komponen</h1>
			</div>

			<br><br>
			<div id="content">
				<div>
					<?php
						include 'sql_connect.php';
						
						$ID = $_GET['id'];
						$query = "SELECT * FROM komponen WHERE id='$ID'";
						$edit_komponen = mysqli_query($con, $query);
					?>
				
					<?php
						while($row_edit_komponen = mysqli_fetch_array($edit_komponen)) {
					?>
					
					<form id="form-new-komponen" class="form-horizontal" method="post" action="edit_komponen_into_db?id=<?php echo $ID; ?>">
							<div class="form-group">
								<label class="col-sm-5 control-label">ID komponen</label>
								<div class="col-sm-5">
									<input id="form-new-komponen-ID" type="text" name="input-ID-komponen" class="form-control" placeholder="Contoh: K-1" value="<?php echo $row_edit_komponen['id'];?>" disabled>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Nama komponen</label>
								<div class="col-sm-5">
									<input id="form-new-komponen-nama" type="text" name="input-nama-komponen" class="form-control" placeholder="Contoh: Komponen 1" value="<?php echo $row_edit_komponen['nama'];?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Stok tersedia</label>
								<div class="col-sm-3">
									<input id="form-new-komponen-stok-tersedia" type="number" name="input-stok-tersedia" class="form-control" placeholder="Contoh: 100" min="0" value="<?php echo $row_edit_komponen['stok_tersedia'];?>" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-5 control-label">Stok minimal</label>
								<div class="col-sm-3">
									<input id="form-new-komponen-stok-minimal" type="number" name="input-stok-minimal" class="form-control" placeholder="Contoh: 10" min="0" value="<?php echo $row_edit_komponen['stok_minimal'];?>" required>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-offset-5 col-sm-7">
									<button id="form-new-komponen-submit" type="submit" class="btn btn-default">Masukkan</button>
								</div>
							</div>
					</form>
					
					<?php } ?>
				</div>
			</div>
		</div>
	</body>
</html>
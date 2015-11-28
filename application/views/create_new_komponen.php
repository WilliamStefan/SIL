
<div class="container">
	<div id="header">
		<h1 class="text-center">Tambah Komponen Baru</h1>
	</div>

	<br><br>
	<div id="content">
		<div>
			<form id="form-new-komponen" class="form-horizontal" method="post" action="new_komponen_into_db">
				<div class="form-group">
					<label class="col-sm-5 control-label">ID komponen</label>
					<div class="col-sm-5">
						<input id="form-new-komponen-ID" type="text" name="input-ID-komponen" class="form-control" placeholder="Contoh: K-1" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-5 control-label">Nama komponen</label>
					<div class="col-sm-5">
						<input id="form-new-komponen-nama" type="text" name="input-nama-komponen" class="form-control" placeholder="Contoh: Komponen 1" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-5 control-label">Stok tersedia</label>
					<div class="col-sm-3">
						<input id="form-new-komponen-stok-tersedia" type="number" name="input-stok-tersedia" class="form-control" placeholder="Contoh: 100" min="0" required>
					</div>
				</div>
				<!-- <div class="form-group">
					<label class="col-sm-5 control-label">Stok minimal</label>
					<div class="col-sm-3">
						<input id="form-new-komponen-stok-minimal" type="number" name="input-stok-minimal" class="form-control" placeholder="Contoh: 10" min="0" required>
					</div>
				</div> -->
				<div class="form-group">
					<div class="col-sm-offset-5 col-sm-7">
						<button id="form-new-komponen-submit" type="submit" class="btn btn-default" onclick="return confirm('ID komponen tidak akan bisa diganti kemudian. Apakah Anda yakin?');">Tambah</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
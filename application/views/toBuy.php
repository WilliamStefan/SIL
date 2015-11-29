<?php include '/../controllers/dss.php';?>
<div class="container">
	<div id="header">
		<h1 class="text-center">STOCK MANAGER</h1>
	</div>

	<div id="content">
		<br>
		<h2>Disarankan untuk dibeli</h2>
		<br>

		<!-- <div class="total">
			Subtotal = ...
		</div> -->

		<!-- pilihan dss: <br><br>
		<select class="form-group">
			<option>cara 1</option>
			<option>cara 2</option>
		</select> -->
					
		<button class="btn" id="cara1">cara 1</button>
		<button class="btn" id="cara2">cara 2</button>

		<br><br>
		<!-- ALTERNATIF 1 : Q = dL -->
		<div class="row">
			<div id="toBuyTable1" class="col-md-12">
				<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
					<tr>
						<th>Nama Barang</th>
						<th>Supplier</th>
						<th>Stok</th>
						<th>Harga</th>
						<th>Min stok</th>
						<th>Subtotal</th>
					</tr>
					<!-- ulang disini -->
					<?php foreach ($komponens as $komponenItem): ?>
					<?php echo '<tr class="displayChecker" id="displayChecker-'.$komponenItem['id_komponen'].'"> '?><!-- kalo jumlah stok > stok minimal bakal ditampilin -->
						<td><?php echo $komponenItem['nama_komponen'] ?></td>
						<td>
							<select onclick="calculateMinStok('<?php echo $komponenItem['id_komponen']?>')" class="form-control select1" id="selectSupplier-<?php echo $komponenItem['id_komponen']?>"><?php 
								include '/../views/sql_connect.php';
								$query = "SELECT supplierbarang.id_supplier, supplierbarang.harga_beli_komponen, supplier.waktu_pengiriman FROM supplierbarang, supplier WHERE supplier.id_supplier = supplierbarang.id_supplier AND  supplierbarang.id_barang='".$komponenItem['id_komponen']."'";
								$supp = mysqli_query($con, $query);
								if(mysqli_num_rows($supp) != 0) {
									while($row_ambil_jumlah = mysqli_fetch_array($supp)) {
										echo '<option value="'. $row_ambil_jumlah['waktu_pengiriman'] ."-".$row_ambil_jumlah['harga_beli_komponen'].'" id="supplier-'. $row_ambil_jumlah['id_supplier'] .'"> ' . $row_ambil_jumlah['id_supplier'] . ' </option>';
									}
								}
								mysqli_close($con);	
							?></select>
						</td>
						<td><?php echo '<div id="stockNow-'.$komponenItem['id_komponen'].'" >'.$komponenItem['stok_tersedia'].'</div>' ?></td>
						<td><?php 
								echo '<div id="price-'.$komponenItem['id_komponen'].'"">'. "HARGA BELI BERDASARKAN SUPPLIER" .'</div>';?></td> 
						<td><?php 
							// $a = countSold($komponenItem['id_komponen']);
							echo '<div id="minStock-'.$komponenItem['id_komponen'].'">'. "sold" .' </div>';
						?></div></td>
						<td class="hidden"><?php 
							// store demand of each
							$a = countSold($komponenItem['id_komponen']);
							echo '<div id="sold-'.$komponenItem['id_komponen'].'">'. $a .' </div>';
						?></div></td>
						<td><?php echo '<div class="subtotal" id="subtotal-'.$komponenItem['id_komponen'].'"></div>';?></td>
					</tr>
					<?php endforeach ?>
					<!-- ulang sampe sini -->
				</table>
			</div>
		</div>
		<!-- ALTERNATIF 2 : Q = d(T+L) + zσT+L – I -->
		<div class="row">
			<div id="toBuyTable2" class="col-md-12">
				<table class="table table-bordered table-striped table-hover table-condensed table-responsive">
					<tr>
						<th>Nama Barang</th>
						<th>Supplier</th>
						<th>Stok</th>
						<th>Harga</th>
						<th>Min stok</th>
						<th>Subtotal</th>
					</tr>
					<!-- ulang disini -->
					<?php foreach ($komponens as $komponenItem): ?>
					<?php echo '<tr class="displayChecker" id="displayChecker2-'.$komponenItem['id_komponen'].'"> '?><!-- kalo jumlah stok > stok minimal bakal ditampilin -->
						<td><?php echo $komponenItem['nama_komponen'] ?></td>
						<td>
							<select onclick="calculateMinStok2('<?php echo $komponenItem['id_komponen']?>')" class="form-control select2" id="selectSupplier2-<?php echo $komponenItem['id_komponen']?>"><?php 
								include '/../views/sql_connect.php';
								$query = "SELECT supplierbarang.id_supplier, supplierbarang.harga_beli_komponen, supplier.waktu_pengiriman FROM supplierbarang, supplier WHERE supplier.id_supplier = supplierbarang.id_supplier AND  supplierbarang.id_barang='".$komponenItem['id_komponen']."'";
								$supp = mysqli_query($con, $query);
								if(mysqli_num_rows($supp) != 0) {
									while($row_ambil_jumlah = mysqli_fetch_array($supp)) {
										echo '<option value="'. $row_ambil_jumlah['waktu_pengiriman'] ."-".$row_ambil_jumlah['harga_beli_komponen'].'" id="supplier2-'. $row_ambil_jumlah['id_supplier'] .'"> ' . $row_ambil_jumlah['id_supplier'] . ' </option>';
									}
								}
								mysqli_close($con);	
							?></select>
						</td>
						<td><?php echo '<div id="stockNow2-'.$komponenItem['id_komponen'].'" >'.$komponenItem['stok_tersedia'].'</div>' ?></td>
						<td><?php 
								echo '<div id="price2-'.$komponenItem['id_komponen'].'"">'. "HARGA BELI BERDASARKAN SUPPLIER" .'</div>';?></td> 
						<td><?php 
							// $a = countSold($komponenItem['id_komponen']);
							echo '<div id="minStock2-'.$komponenItem['id_komponen'].'">'. "sold" .' </div>';
						?></div></td>
						<td class="hiddens"><?php 
							// store demand of each
							$a = countSold($komponenItem['id_komponen']);
							echo '<div id="sold2-'.$komponenItem['id_komponen'].'">'. $a .' </div>';
						?></div></td>
						<td><?php echo '<div class="subtotal" id="subtotal2-'.$komponenItem['id_komponen'].'"></div>';?></td>
					</tr>
					<?php endforeach ?>
					<!-- ulang sampe sini -->
				</table>
			</div>
		</div>





	</div>
</div>

<script type="text/javascript">

	$(window).load(function(){
		$("#toBuyTable2").css("display","none");
	})
	$( ".select1" ).each(function( index ) {
		$id = this.id.substring(15);
	  	calculateMinStok($id);
	  	calculateSubtotal($id);
	  	hideSafeStocks($id);
	  	// calculateTotal();
	});
	$("#cara1").click(function(){
		$("#toBuyTable1").css("display","block");
		$("#toBuyTable2").css("display","none");
	});
	$("#cara2").click(function(){
		$("#toBuyTable1").css("display","none");
		$("#toBuyTable2").css("display","block");
	});
	function calculateMinStok($id_komponen){
		$selectedSupplierInfo = $("#selectSupplier-"+$id_komponen).val();
		$separatorPosition = $selectedSupplierInfo.indexOf("-");
		$selectedSupplierDelTime = $selectedSupplierInfo.substring(0,$separatorPosition);
		$selectedSupplierPrice = $selectedSupplierInfo.substring($separatorPosition+1);
		$("#price-"+$id_komponen).text($selectedSupplierPrice);
		$demand = $("#sold-"+$id_komponen).text();
		$("#minStock-"+$id_komponen).text(Math.ceil($demand / 23 * $selectedSupplierDelTime));
		calculateSubtotal($id_komponen);
	};
	function calculateSubtotal($id_komponen){
		$price = $("#price-"+$id_komponen).text();
		$amount = $("#minStock-"+$id_komponen).text();
		$("#subtotal-"+$id_komponen).text($price * $amount);
		// alert($amount);
	}
	function calculateTotal(){
		$sum = 0;
		$( ".subtotal" ).each(function( index ) {
			// $sum = 0;
			$sum += parseInt($(".subtotal" ).text());
			$('.total').text($sum);
		});
	}
	function hideSafeStocks($id_komponen){
		$stoksekarang = $("#stockNow-"+$id_komponen).text();
		$minimalStok = $("#minStock-"+$id_komponen).text();

		if(parseInt($stoksekarang) > parseInt($minimalStok)){
			$("#displayChecker-"+$id_komponen).css('display','none');	
		}
	}


	$( ".select2" ).each(function( index ) {
		$id = this.id.substring(16);
	  	calculateMinStok2($id);
	  	calculateSubtotal2($id);
	  	hideSafeStocks2($id);
	  	// calculateTotal();
	});
	function calculateMinStok2($id_komponen){
		$selectedSupplierInfo = $("#selectSupplier2-"+$id_komponen).val();
		$separatorPosition = $selectedSupplierInfo.indexOf("-");
		$selectedSupplierDelTime = $selectedSupplierInfo.substring(0,$separatorPosition);
		$selectedSupplierPrice = $selectedSupplierInfo.substring($separatorPosition+1);
		$("#price2-"+$id_komponen).text($selectedSupplierPrice);
		$demand = $("#sold2-"+$id_komponen).text();
		$t = 1; //rentang hari waktu antar review
		$z = 0.2; //distribusi normal
		$i = $("#stockNow-"+$id_komponen).text();
		$minstok = parseInt($t)+parseInt($selectedSupplierDelTime);
		$minstok = $minstok * $demand;
		// --------------------------------------------
		$minstok = parseInt($minstok) - parseInt($i);
		// --------------------------------------------
		$o = Math.sqrt(($t + $i)* $demand * 0.001);
		$o = $o * $z;
		$minstok = $minstok + $o;
		// --------------------------------------------
		// $("#minStock2-"+$id_komponen).text(Math.ceil($demand / 23 * $selectedSupplierDelTime));
		$("#minStock2-"+$id_komponen).text($minstok);
		calculateSubtotal($id_komponen);
	};
	function calculateSubtotal2($id_komponen){
		$price = $("#price2-"+$id_komponen).text();
		$amount = $("#minStock2-"+$id_komponen).text();
		$("#subtotal2-"+$id_komponen).text($price * $amount);
		// alert($amount);
	}
	function calculateTotal2(){
		$sum = 0;
		$( ".subtotal2" ).each(function( index ) {
			// $sum = 0;
			$sum += parseInt($(".subtotal2" ).text());
			$('.total2').text($sum);
		});
	}
	function hideSafeStocks2($id_komponen){
		$stoksekarang = $("#stockNow2-"+$id_komponen).text();
		$minimalStok = $("#minStock2-"+$id_komponen).text();

		if(parseInt($stoksekarang) > parseInt($minimalStok)){
			$("#displayChecker2-"+$id_komponen).css('display','none');	
		}
	}



</script>

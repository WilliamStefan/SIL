<!DOCTYPE html>
<html lang="en">
	<!-- CSS -->
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../assets/main.css" rel="stylesheet">

	<!-- Script -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript" src="../../assets/js/bootstrap.js"></script>

	<head>
		<title>STOCK MANAGER</title>
	</head>

	<body>
		<div class="container">
			<div id="header-menu">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<!-- Jumlah garis -->
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>

						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index_home">Homexxxx</a></li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Create<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="create_new_komponen">Komponen</a></li>
										<li><a href="create_new_histori">Histori penjualan</a></li>
										<li><a href="create_new_supplier">Supplier</a></li>
									</ul>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Read<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="read_komponen">Komponen</a></li>
										<li><a href="read_histori">Histori penjualan</a></li>
										<li><a href="read_supplier">Supplier</a></li>
									</ul>
								</li>
								
								<!-- <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Update<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Komponen</a></li>
										<li><a href="#">Histori Penjualan</a></li>
										<li><a href="#">Supplier</a></li>
									</ul>
								</li>
								
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Delete<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Komponen</a></li>
										<li><a href="#">Histori Penjualan</a></li>
										<li><a href="#">Supplier</a></li>
									</ul>
								</li> -->
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
	</body>
	
	<script>
		$('.dropdown-toggle').dropdown();
	</script>
</html>
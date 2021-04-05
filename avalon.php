<?php include('base.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Olah Data</title>
	<link rel="stylesheet" href="vendor/bootstrap.min.css">
</head>
<body>
	<div class="container py-3">
		<h1 class="text-center">Excalibur</h1>
		<hr>
		<div class="row">
			<div class="col-sm-2 mb-3">
				<div class="list-group">
					<a href="avalon.php" class="list-group-item list-group-item-action">Beranda</a>
					<a href="?halaman=tambah-database" class="list-group-item list-group-item-action">Tambah Database</a>
				</div>
			</div>
			<div class="col-sm mb-3">
				<?php 
					if(!$_GET['halaman']) {
						include('halaman/index.php');
					} else {
						if($_GET['halaman'] == 'tambah-database') {
							include('halaman/tambah-database.php');
						}
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
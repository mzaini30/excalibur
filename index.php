<?php include('base.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Olah Data</title>
	<link rel="stylesheet" href="lib/bootstrap.min.css">
</head>
<body>
	<div class="container py-3">
		<h1 class="text-center">Excalibur</h1>
		<hr>
		<div class="row">
			<div class="col-sm-2 mb-3">
				<div class="list-group mb-3">
					<a href="?halaman=tambah-database" class="list-group-item list-group-item-action">Tambah Database</a>
					<a href="?halaman=olah-sql" class="list-group-item list-group-item-action">Olah SQL</a>
					<a href="?halaman=contoh" class="list-group-item list-group-item-action">Contoh</a>
				</div>
				<?php if ($_GET['halaman'] == 'olah-sql'): ?>
					<form action="">
						<div class="mb-3">
							<input type="text" class="d-none" name="halaman" value="olah-sql">
							<label for="">ID Database</label>
							<input type="text" class="form-control" required="" value="<?= $_GET['database'] ?>" name='database'>
						</div>
						<div class="mb-3">
							<input type="submit" value="Get" class="btn btn-success">
						</div>
					</form>
				<?php endif ?>
			</div>
			<div class="col-sm mb-3">
				<?php 
					if(!$_GET['halaman']) {
						// include('komponen/index.php');
						echo '<script>location.href="?halaman=olah-sql"</script>';
					} else {
						if ($_GET['halaman'] == 'tambah-database') {
							include('komponen/tambah-database.php');
						} elseif ($_GET['halaman'] == 'olah-sql') {
							include('komponen/olah-sql.php');
						} elseif ($_GET['halaman'] == 'contoh') {
							include('komponen/contoh.php');
						}
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>
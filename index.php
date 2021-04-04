<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Excalibur</title>
	<link rel="stylesheet" href="vendor/bootstrap.min.css">
	<style>
		.jarak-atas {
			margin-top: 20vh;
		}
	</style>
</head>
<body>
	<div class="container py-3 jarak-atas">
		<?php
			if (!!$_POST['password']) {
				if ($_POST['password'] == 'kucing') {
					header('Location: avalon.php');
				} else {
					echo '<div class="alert alert-warning">Password Salah</div>';
				}
			}
		?>
		<form action="" method="post">
			<div class="mb-3">
				<input type="password" required="" name="password" class="form-control">
			</div>
		</form>
	</div>
</body>
</html>
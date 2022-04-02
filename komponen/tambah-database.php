<form action="" method="post">
	<div class="mb-3">
		<input type="" value="<?= md5(rand()) ?>" name="tabel" class='d-none'>
		<label for="">Masukkan Field</label>
		<input type="text" class="form-control" placeholder="nama, alamat, kelas" required="" name="kolom">
	</div>
	<div class="mb-3">
		<input type="submit" value='Buat' class="btn btn-success">
	</div>
</form>
<?php 
	if ($_POST) {
		$kolom = array_filter(explode(', ', $_POST['kolom']));
		$teks = "CREATE TABLE `database_" . $_POST['tabel'] . "` ( `id` INT NOT NULL AUTO_INCREMENT , ";
		foreach ($kolom as $x) {
			$teks .= "`" . $x . "` TEXT NULL , ";
		}
		$teks .= "PRIMARY KEY (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_general_ci; ";
		// $teks = "CREATE TABLE 'database_" . $_POST['tabel'] . "' ( 'id' INT NOT NULL AUTO_INCREMENT , 'nama' TEXT NOT NULL , 'kelas' TEXT NOT NULL , 'sekolah' TEXT NOT NULL , PRIMARY KEY ('id')) ENGINE = InnoDB CHARSET=utf8 COLLATE utf_general_ci; ";
		// echo $teks;
		$simpanIdDatabase = 'insert into excalibur_ringkasan_sql (idDatabase) values ("' . $_POST['tabel'] . '")';
		$db->prepare($simpanIdDatabase)->execute();
		$db->prepare($teks)->execute();
?>
	<hr>
	<div class="mb-3">
		<label>ID Tabel</label>
		<input type="" value="<?= $_POST['tabel'] ?>" class='form-control' readonly name="">
	</div>
	<div class="mb-3">
		<label>Kolom</label>
		<input value="id, <?= $_POST['kolom'] ?>" type="text" readonly="" class="form-control">
	</div>
<?php
		// header('Location: ' . $_POST['tabel']);
	}
?>

<script>
	document.title = 'Tambah Database'
</script>
<?php 
	$datanya = '';
	if (!!$_POST) {
		$sql = 'update excalibur_ringkasan_sql set semuaSql = "' . $_POST['data'] . '" where idDatabase = "'. $_GET['database'] .'"';
		$db->prepare($sql)->execute();
		$hapus = 'delete from excalibur_sql where idDatabase = "'. $_GET['database'] .'"';
		$db->prepare($hapus)->execute();
		$semuaPerintah = $_POST['data'];
		$semuaPerintah = str_replace("[db]", 'database_' . $_GET['database'], $semuaPerintah);
		// $semuaPerintah = preg_replace("/\[([a-z0-9_]+)\]/i", '\".$_POST[\"$1\"].\"', $semuaPerintah);
		$semuaPerintah = preg_replace("/\r/", '', $semuaPerintah);
		$jadikanArray = explode("\n", $semuaPerintah);
		// var_dump($jadikanArray);
		$arrayPisah = [];
		for ($i=0; $i < count($jadikanArray); $i = $i + 3) { 
			$arrayPisah[] = [
				$jadikanArray[$i],
				$jadikanArray[$i + 1]
			];
		}
		// var_dump($arrayPisah);
		// echo '<pre>' . json_encode($arrayPisah, JSON_PRETTY_PRINT) . '</pre>';
		foreach ($arrayPisah as $key => $value) {
			$jalankan = '
				insert into excalibur_sql (idDatabase, kunci, perintah)
				values ("'.$_GET['database'].'", "'.$value[0].'", "'.$value[1].'")
			';
			$db->prepare($jalankan)->execute();
		}
	}
	if (!!$_GET['database']) {
		$sql = 'select * from excalibur_ringkasan_sql where idDatabase = "' . $_GET['database'] . '"';
		$hasil = olah($sql, $db);
		$datanya = $hasil[0]['semuaSql'];
	}
?>
<form action="" method="post">
	<div class="mb-3">
		<textarea id="" cols="30" rows="10" name="data" class="form-control elData"><?= $datanya ?></textarea>
	</div>
	<input type="submit" class="btn btn-success" value="Update">
</form>

<script>
	const elData = document.querySelector('.elData')
	function tingginya(){
		elData.style.height = `${window.innerHeight - 190}px`
	}
	tingginya()
	window.addEventListener('resize', tingginya)
	document.title = 'Olah SQL'
</script>
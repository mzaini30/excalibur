<?php 
	$datanya = '';
	if (!!$_POST) {
		$sql = 'update excalibur_ringkasan_sql set semuaSql = "' . $_POST['data'] . '" where idDatabase = "'. $_GET['database'] .'"';
		$db->prepare($sql)->execute();
		$hapus = 'delete from excalibur_sql where idDatabase = "'. $_GET['database'] .'"';
		$db->prepare($hapus)->execute();
		$semuaPerintah = $_POST['data'];
		$semuaPerintah = str_replace("[db]", 'kucing', $semuaPerintah);
		$jadikanArray = explode("\n", $semuaPerintah);
		var_dump($jadikanArray);
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
<!-- 
<script>
	const elData = document.querySelector('.elData')
	function tingginya(){
		elData.style.height = `${window.innerHeight - 190}px`
	}
	tingginya()
	window.addEventListener('resize', tingginya)
</script> -->
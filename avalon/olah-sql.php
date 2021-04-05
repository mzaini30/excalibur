<?php 
	$datanya = '';
	if (!!$_GET['database']) {
		$sql = 'select * from excalibur_ringkasan_sql where idDatabase = "' . $_GET['database'] . '"';
		$hasil = olah($sql, $db);
		$datanya = $hasil[0]['semuaSql'];
	}
?>
<form action="" method="post">
	<div class="mb-3">
		<textarea name="" id="" cols="30" rows="10" class="form-control elData"><?= $datanya ?></textarea>
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
</script>
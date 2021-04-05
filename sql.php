<?php 
	include('base.php');
	if (!!$_POST) {
		header('Content-Type: application/json');
		$sql = '
			select perintah
			from excalibur_sql
			where
				idDatabase = "'.$_POST['id'].'" and
				kunci = "'.$_POST['kunci'].'"
		';
		$hasil = olah($sql, $db);
		echo json_encode($hasil[0]['perintah']);
	}
?>
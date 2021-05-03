<?php 
	include('base.php');
	header('Access-Control-Allow-Methods: GET, POST');
	header('Access-Control-Allow-Origin: *');
	if (!!$_POST) {
		header('Content-Type: application/json');
		$sql = '
			select perintah
			from excalibur_sql
			where
				idDatabase = '.$db->quote($_POST['id']).' and
				kunci = '.$db->quote($_POST['kunci']).'
		';
		$hasil = olah($sql, $db);
		$perintahnya = $hasil[0]['perintah'];
		foreach ($_POST as $key => $value) {
			$perintahnya = preg_replace('/\['.$key.'\]/', $db->quote($value), $perintahnya);
		}
		$jalankan = olah($perintahnya, $db);
		echo json_encode($jalankan);
	}
?>
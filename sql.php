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
				idDatabase = "'.$_POST['id'].'" and
				kunci = "'.$_POST['kunci'].'"
		';
		$hasil = olah($sql, $db);
		$perintahnya = $hasil[0]['perintah'];
		foreach ($_POST as $key => $value) {
			// echo json_encode($key);
			$perintahnya = preg_replace('/\['.$key.'\]/', $value, $perintahnya);
		}
		// echo json_encode($perintahnya);
		// echo json_encode($_POST);
		// $perintahnya = '"' . $hasil[0]['perintah'] . '"';
		// $perintahnya = preg_replace("/\[([a-z0-9_]+)\]/i", '$_POST["$1"]', $perintahnya);
		# $perintahnya = preg_replace("/\[([a-z0-9_]+)\]/i", '".$_POST["$1"]."', $perintahnya);
		// $perintahnya = "insert into database_ca04a5e26b59240a3a022aa16ad3c0d0 (mau, makan) values ('".$_POST["pertama"]."', '".$_POST["kedua"]."')";
		// $perintahnya = eval($perintahnya);
		$jalankan = olah($perintahnya, $db);
		// echo json_encode($perintahnya);
		echo json_encode($jalankan);
	}
?>
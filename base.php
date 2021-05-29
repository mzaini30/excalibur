<?php

$host = 'localhost';
$username = 'excalibur';
$password = '0809894kali';
$database = 'excalibur';

$db = new PDO("mysql:host=" . $host . ";dbname=" . $database, $username, $password);
function olah($sql, $db){
	$stmt = $db->query($sql);
	$survery = [];
	$a = [];
	do {
	    if ($rows = $stmt->fetchAll(PDO::FETCH_ASSOC)){
	        array_push($a, $rows);
	    }
	} while ($stmt->nextRowset());
	if (count($a) > 0){
	    return $a[0];
	}
}
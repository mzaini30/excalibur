<?php

$host = 'localhost';
$username = 'username';
$password = 'password';
$database = 'database';

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
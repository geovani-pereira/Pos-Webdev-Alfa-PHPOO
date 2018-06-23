<?php

$host = $_GET['host'];

$dsn = 'mysql:host=localhost; dbname=mysql'; // dsn string dados de acesso ao servidor


$dbh = new PDO ($dsn, 'root', '');

$sql = 'SELECT Host FROM db where Host = :h '; // :h placeholder sql


$stmt = $dbh->prepare($sql);
$stmt->bindParam(':h', $host, PDO::PARAM_STR); // PARAM_STR TIPO DE PARAMETRO STRING
$stmt->execute();


while ($record = $stmt->fetchObject()){

	echo $record->Host . '<br>';

}


$dbh = NULL;
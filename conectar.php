<?php

$host = $_GET['host'];

$dsn = 'mysql:host=localhost; dbname=mysql';


$dbh = new PDO ($dsn, 'root', '');

$sql = 'SELECT Host FROM db where Host = :h ';


$stmt = $dbh->prepare($sql);
$stmt->bindParam(':h', $host, PDO::PARAM_STR);
$stmt->execute();


while ($record = $stmt->fetchObject()){

	echo $record->Host . '<br>';

}


$dbh = NULL;
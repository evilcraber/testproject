<?php

$driver = 'mysql';
$host = 'localhost';
$db_name = 'Test_DB';
$db_user = 'root';
$db_pass = '';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try{
	$pdo = new PDO(
		"$driver:host=$host;dbname=$Test_DB;charset=$charset",$db_user,$db_pass, $options
		);
}catch (PDOException $i){
	die ('Ошибка подключения к базе данных');
}
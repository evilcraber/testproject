<?php

require('connect.php');

$sql = "SELECT*FROM users";

$query = $pdo->prepare($sql);
$query->execute();
$errinfo = $query->errorInfo();

if ($errorInfo[])

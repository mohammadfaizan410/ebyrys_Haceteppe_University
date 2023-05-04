<?php
$dbhost = $_SERVER['e-byrys.cpcbxswdfvjg.eu-central-1.rds.amazonaws.com'];
$dbport = $_SERVER['3306'];
$dbname = $_SERVER['ebyrys_db'];
$charset = 'utf8' ;


$dsn = "mysql:host={$dbhost};port={$dbport};dbname={$dbname};charset={$charset}";
$username = $_SERVER['admin'];
$password = $_SERVER['12345678'];

$pdo = new PDO($dsn, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

<?php
$db_user = "admin";
$db_pass = "12345678";
$db_name = "ebyrys_db";
$db_host = "18.159.134.238";
$db = new PDO('mysql:host=' . $db_host .';dbname=' . $db_name . ';charset-utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

<?php
$host = "localhost";
$user = "zeyadz03";
$password = "Zox12345Zox";
$db = "techzonelabs";

$dsn = "mysql:host=" . $host . ";dbname=" . $db;

$pdo = new PDO($dsn, $user,  $password);
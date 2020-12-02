<?php

$server = 'localhost';
$username = 'admin';
$password = 'admin';
$database = 'anime';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>

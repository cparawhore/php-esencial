<?php

$servername = "127.0.0.1";
$username = "root";
$password = "ficherono";
$database = "fullstack_ex";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$database;charset=UTF8", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
  echo "Imposible conectarse a la base de datos: " . $e->getMessage();
  exit();
}

?>

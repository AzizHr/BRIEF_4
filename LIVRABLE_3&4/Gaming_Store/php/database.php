<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gaming_store";

try {
  $conn = new PDO("mysql:host=$servername;dbname=.$dbname.", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
  session_start();
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
<?php
$sname= "localhost:3306";
$unmae= "fanta";
$password = "fanta-password";
$db_name = "fanta_db";
$conn = new mysqli($sname, $unmae, $password, $db_name);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
?>
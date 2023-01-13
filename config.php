<?php

$hostname = 'localhost';
$username = 'krossale';
$password = 'webove aplikace';
$database = 'krossale';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("We apologize. Database is not working. 
  We will fix the problem in the near future." . 
  $conn->connect_error);
}

// echo "Connected successfully";

?>
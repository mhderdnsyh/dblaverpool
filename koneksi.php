<?php
$server ="localhost";
$username ="root";
$password="020627";
$db ="dblaverpool";

// $dbConnection = null;
// $dsn = "mysql:host={$server};db ={$db}";

try {
  $dbConnection = mysqli_connect($server, $username, $password, $db);
  // $dbConnection= new PDO($dsn, $username, $password);
} catch (Exception $exception) {
  die("Terjadi error : {$exception->getMessage()}");
}



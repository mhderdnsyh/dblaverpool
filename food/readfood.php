<?php 
 require_once '../koneksi.php'; 
header("Content-Type: application/json; charset=UTF-8"); 

$query = "SELECT * FROM food";
$execute = mysqli_query($dbConnection,$query);
// $response = [];
$response = array();
$row = $execute -> fetch_assoc();
// $row = mysqli_fetch_all($execute);

if (count($row)>0) {
  $response['status']='succcess';
  $response['message']='data food ditemukan';
  $response['data']=$row;
}
else {
  $response['status']='failed';
  $response['message']='data food tidak ditemukan';
  $response['data']=$row;
}

  $json = json_encode($response,JSON_PRETTY_PRINT);
  echo $json;

?>
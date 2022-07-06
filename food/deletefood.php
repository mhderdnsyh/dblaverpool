<?php 
  include_once "../koneksi.php";

  header("Content-Type: application/json; charset=UTF-8");

  $id_food = $_POST['id_food'];

  $query = "DELETE FROM `food` WHERE id_food = $id_food";
  $execute = $dbConnection->query($query);
  $response = [];

  if ($execute) {
    $response['status'] = 'sukses';
    $response['message'] = 'food sukses didelete';
  } else {
    $response['status'] = 'gagal';
    $response['message'] = 'food gagal didelete';
  }

  $json = json_encode($response, JSON_PRETTY_PRINT);
  echo $json;

?>
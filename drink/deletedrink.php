<?php 
  include_once "../koneksi.php";

  header("Content-Type: application/json; charset=UTF-8");

  $id_drink = $_POST['id_drink'];

  $query = "DELETE FROM `drink` WHERE id_drink = $id_drink";
  $execute = $dbConnection->query($query);
  $response = [];

  if ($execute) {
    $response['status'] = 'sukses';
    $response['message'] = 'drink sukses didelete';
  } else {
    $response['status'] = 'gagal';
    $response['message'] = 'drink gagal didelete';
  }

  $json = json_encode($response, JSON_PRETTY_PRINT);
  echo $json;

?>
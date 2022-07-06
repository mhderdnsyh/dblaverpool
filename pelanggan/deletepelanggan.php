<?php 
  include_once "../koneksi.php";

  header("Content-Type: application/json; charset=UTF-8");

  $id_pelanggan = $_POST['id_pelanggan'];

  $query = "DELETE FROM `pelanggan` WHERE id_pelanggan = $id_pelanggan";
  $execute = $dbConnection->query($query);
  $response = [];

  if ($execute) {
    $response['status'] = 'sukses';
    $response['message'] = 'data pelanggan sukses didelete';
  } else {
    $response['status'] = 'gagal';
    $response['message'] = 'data pelanggan gagal didelete';
  }

  $json = json_encode($response, JSON_PRETTY_PRINT);
  echo $json;

?>
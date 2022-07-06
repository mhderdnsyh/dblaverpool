<?php 
  include_once "../koneksi.php";

  header("Content-Type: application/json; charset=UTF-8");

  $id_pesanan = $_POST['id_pesanan'];

  $query = "DELETE FROM `hasil` WHERE id_pesanan = $id_pesanan";
  $execute = $dbConnection->query($query);
  $response = [];

  if ($execute) {
    $response['status'] = 'sukses';
    $response['message'] = 'pesanan sukses didelete';
  } else {
    $response['status'] = 'gagal';
    $response['message'] = 'pesanan gagal didelete';
  }

  $json = json_encode($response, JSON_PRETTY_PRINT);
  echo $json;

?>
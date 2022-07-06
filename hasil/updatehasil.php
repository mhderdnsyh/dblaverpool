<?php 
include_once '../koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$id_pesanan = $_POST['id_pesanan'];
$id_pelanggan = $_POST['id_pelanggan'];
$id_food = $_POST['id_food'];
$id_drink = $_POST['id_drink'];

$query = "UPDATE `hasil` SET `id_pelanggan`='$id_pelanggan', `id_food`='$id_food', `id_drink`='$id_drink' WHERE `id_pesanan`='$id_pesanan'";
$execute = $dbConnection->query($query);
$response = [];


if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'pesanan sukses diupdate';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'pesanan gagal diupdate';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;


?>
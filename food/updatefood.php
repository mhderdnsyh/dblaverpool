<?php 
include_once '../koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$id_food = $_POST['id_food'];
$nama_food = $_POST['nama_food'];
$harga_food = $_POST['harga_food'];
$stok_food = $_POST['stok_food'];
$jml_pesanan = $_POST['jml_pesanan'];
$desc_food = $_POST['desc_food'];

$query = "UPDATE `food` SET `nama_food`='$nama_food', `harga_food`='$harga_food', `stok_food`='$stok_food', `jml_pesanan`='$jml_pesanan', `desc_food`='$desc_food' WHERE `id_food`='$id_food'";
$execute = $dbConnection->query($query);
$response = [];


if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'food sukses diupdate';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'food gagal diupdate';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;


?>
<?php 
include_once '../koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$id_drink = $_POST['id_drink'];
$nama_drink = $_POST['nama_drink'];
$harga_drink = $_POST['harga_drink'];
$stok_drink = $_POST['stok_drink'];
$jml_pesanan = $_POST['jml_pesanan'];
$desc_drink = $_POST['desc_drink'];

$query = "INSERT INTO `drink`(`id_drink`,`nama_drink`,`harga_drink`,`stok_drink`,`jml_pesanan`,`desc_drink`) VALUES ('$id_drink','$nama_drink','$harga_drink','$stok_drink','$jml_pesanan','$desc_drink')";
$execute = $dbConnection->query($query);
$response = [];

if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'drink sukses ditambahkan';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'drink gagal ditambahkan';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;


?>
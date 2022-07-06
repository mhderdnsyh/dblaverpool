<?php 
include_once '../koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$id_drink = $_POST['id_drink'];
$nama_drink = $_POST['nama_drink'];
$harga_drink = $_POST['harga_drink'];
$stok_drink = $_POST['stok_drink'];
$jml_pesanan = $_POST['jml_pesanan'];
$desc_drink = $_POST['desc_drink'];

$query = "UPDATE `drink` SET `nama_drink`='$nama_drink', `harga_drink`='$harga_drink', `stok_drink`='$stok_drink', `jml_pesanan`='$jml_pesanan', `desc_drink`='$desc_drink' WHERE `id_drink`='$id_drink'";
$execute = $dbConnection->query($query);
$response = [];


if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'drink sukses diupdate';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'drink gagal diupdate';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;


?>
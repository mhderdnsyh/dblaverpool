<?php 
include_once '../koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];


$query = "UPDATE `pelanggan` SET `nama`='$nama', `email`='$email', `alamat`='$alamat', `jenis_kelamin`='$jenis_kelamin', `no_hp`='$no_hp' WHERE `id_pelanggan`='$id_pelanggan'";
$execute = $dbConnection->query($query);
$response = [];


if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'data pelanggan sukses diupdate';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'data pelanggan gagal diupdate';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;


?>
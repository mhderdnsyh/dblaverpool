<?php 
include_once '../koneksi.php';

header("Content-Type: application/json; charset=UTF-8");

$id_pelanggan = $_POST['id_pelanggan'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_hp = $_POST['no_hp'];

$query = "INSERT INTO `pelanggan`(`id_pelanggan`,`nama`,`email`,`alamat`,`jenis_kelamin`,`no_hp`) VALUES ('$id_pelanggan','$nama','$email','$alamat','$jenis_kelamin','$no_hp')";
$execute = $dbConnection->query($query);
$response = [];

if ($execute) {
  $response['status'] = 'sukses';
  $response['message'] = 'data pelanggan sukses ditambahkan';
} else {
  $response['status'] = 'gagal';
  $response['message']= 'data pelanggan gagal ditambahkan';
}
$json = json_encode($response,JSON_PRETTY_PRINT);
echo $json;


?>
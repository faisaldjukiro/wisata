<?php

use phpDocumentor\Reflection\Types\String_;

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'wisata');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    die('Unable TO Connect To Database' . mysqli_connect_error());
}
$stmt = $conn->prepare('SELECT id_peninggalan, nama_peninggalan, foto, keterangan, lokasi, nama_daerah, latitude, longitude
FROM tb_peninggalan 
INNER JOIN tb_daerah ON tb_daerah.id_daerah = tb_peninggalan.id_daerah 
ORDER BY id_peninggalan DESC');

$stmt->execute();
$stmt->bind_result($id_peninggalan, $nama_peninggalan, $foto, $keterangan, $lokasi, $nama_daerah, $latitude, $longitude);

$data = [];

while ($stmt->fetch()) {
    // $temp = [];
    $temp['id_peninggalan'] = $id_peninggalan;
    $temp['nama_peninggalan'] = $nama_peninggalan;
    $temp['keterangan'] = strip_tags($keterangan);
    $temp['nama_daerah'] = $nama_daerah;
    $temp['lokasi'] = "https://www.google.com/maps/place/" . $lokasi;
    $temp['sharelokasi'] = "https://www.google.com/maps/place/" . $latitude . ',' . $longitude;
    $temp['latitude'] = $latitude;
    $temp['longitude'] = $longitude;
    $temp["foto"] = "https://f756-140-213-122-146.ngrok.io/wisata/gambar/" . $foto;
    array_push($data, $temp);
}



header('Content-Type: application/json');
// echo json_encode($data);

echo json_encode($data);

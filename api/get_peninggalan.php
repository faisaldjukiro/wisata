<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'wisata');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (mysqli_connect_errno()) {
    die('Unable TO Connect To Database' . mysqli_connect_error());
}
$stmt = $conn->prepare('SELECT id_peninggalan, nama_peninggalan, foto, keterangan FROM tb_peninggalan ORDER BY id_peninggalan DESC');
$stmt->execute();
$stmt->bind_result($id_peninggalan, $nama_peninggalan, $foto, $keterangan);

$data = array();

while ($stmt->fetch()) {
    $temp = array();
    $temp['id_peninggalan'] = $id_peninggalan;
    $temp['nama_peninggalan'] = $nama_peninggalan;
    // $temp['foto'] = $foto;
    $temp['keterangan'] = $keterangan;
    $temp["foto"] = "http://192.168.137.1/wisata/gambar/" . $foto;

    array_push($data, $temp);
}

header('Content-Type: application/json');
echo json_encode($data);

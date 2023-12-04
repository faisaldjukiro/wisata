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
$stmt = $conn->prepare('SELECT id_pakaian, nama_pakaian, foto, keterangan, nama_daerah
FROM tb_adat 
INNER JOIN tb_daerah ON tb_daerah.id_daerah = tb_adat.id_daerah 
ORDER BY id_pakaian DESC');

$stmt->execute();
$stmt->bind_result($id_pakaian, $nama_pakaian, $foto, $keterangan, $nama_daerah);
$data = [];
while ($stmt->fetch()) {

    $temp['id_pakaian'] = $id_pakaian;
    $temp['nama_pakaian'] = $nama_pakaian;
    $temp['keterangan'] = strip_tags($keterangan);
    $temp['nama_daerah'] = $nama_daerah;
    $temp["foto"] = "https://f756-140-213-122-146.ngrok.io/wisata/gambar/" . $foto;
    array_push($data, $temp);
}

header('Content-Type: application/json');
echo json_encode($data);

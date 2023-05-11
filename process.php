<?php
$file = "my_data.json";
$array = array();
// ambil data file get content
$ambilData = file_get_contents($file);
$decodeData = json_decode($ambilData, true);

$data = array(
    "nama" => $_POST['nama'],
    'email' => $_POST['email'],
    'alamat' => $_POST['alamat'],
    'program' => $_POST['program'],
    'tahun' => $_POST['tahun'],
    'jenis' => $_POST['jenis']
);
array_push($decodeData, $data);
$json = json_encode($decodeData, JSON_PRETTY_PRINT);
file_put_contents($file, $json);



?>

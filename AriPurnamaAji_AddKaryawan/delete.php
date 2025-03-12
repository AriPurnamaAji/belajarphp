<?php
$nik = $_GET['Nik'];

$karyawan = file_get_contents('data.json');
$data = json_decode($karyawan, true);

foreach ($data as $x => $del) {
    if ($del['Nik'] === $nik) {
        array_splice($data, $x, 1);
    }
}

$final_data = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('data.json', $final_data);

header("Location: karyawan.php");

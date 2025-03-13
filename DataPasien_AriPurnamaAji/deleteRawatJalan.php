<?php
$kode_rawat = $_GET['Kode_rawat'];

$rawatJalan = file_get_contents('dataRawatJalan.json');
$data = json_decode($rawatJalan, true);

foreach ($data as $x => $del) {
    if ($del['Kode_rawat'] === $kode_rawat) {
        array_splice($data, $x, 1);
    }
}

$final_data = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('dataRawatJalan.json', $final_data);

header("Location: rawatJalan.php");

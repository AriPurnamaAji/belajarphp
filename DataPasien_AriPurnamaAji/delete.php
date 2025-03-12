<?php
$nrm = $_GET['Nrm'];

$pasien = file_get_contents('data.json');
$data = json_decode($pasien, true);

foreach ($data as $x => $del) {
    if ($del['Nrm'] === $nrm) {
        array_splice($data, $x, 1);
    }
}

$final_data = json_encode($data, JSON_PRETTY_PRINT);
file_put_contents('data.json', $final_data);

header("Location: pasien.php");

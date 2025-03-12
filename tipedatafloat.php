<?php
    $nilaiMatematika = 5.1;
    $nilaiIPA = 6.7;
    $nilaiBahasaIndonesia = 9.3;

    // hitung nilai rata-rata
    $ratarata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia) / 3;

    echo "Matematika : ($nilaiMatematika)<br>";
    echo "IPA : ($nilaiIPA)<br>";
    echo "Bahasa Indonesia : ($nilaiBahasaIndonesia)<br>";
    echo "Rata-rata : ($ratarata)<br>";

    var_dump($ratarata);
?>
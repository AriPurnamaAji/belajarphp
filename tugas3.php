<?php
    $namaMahasiswa="Azis";
    $nilaiMahasiswa = 71;
    switch ($nilaiMahasiswa) {
        case ($nilaiMahasiswa >= 71);
        echo "Nama mahasiswa : {$namaMahasiswa},<br> Nilai: {$nilaiMahasiswa},<br> Keterangan : Lulus.<br>";
        break;
        case ($nilaiMahasiswa >= 50);
        echo "Nama mahasiswa : {$namaMahasiswa},<br> Nilai: {$nilaiMahasiswa},<br> Keterangan : Tidak lulus.<br>";
        break;
        default:
        echo "Nama mahasiswa : {$namaMahasiswa},<br> Nilai: {$nilaiMahasiswa},<br> Keterangan : Drop out.<br>";
    }
?>
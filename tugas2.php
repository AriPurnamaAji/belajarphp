<?php
    $namaMahasiswa="Azis";
    $nilaiMahasiswa=71;
    if ($nilaiMahasiswa >= 71){
        echo "Nama mahasiswa : {$namaMahasiswa},<br> Nilai: {$nilaiMahasiswa},<br> Keterangan : Lulus.<br>";
    } elseif ($nilaiMahasiswa >= 50) {
        echo "Nama mahasiswa : {$namaMahasiswa},<br> Nilai: {$nilaiMahasiswa},<br> Keterangan : Tidak lulus.<br>";
    } else {
        echo "Nama mahasiswa : {$namaMahasiswa},<br> Nilai: {$nilaiMahasiswa},<br> Keterangan : Drop out.<br>";
    }
?>
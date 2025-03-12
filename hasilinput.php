<?php
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];
    $proglat = $_POST['proglat'];

    switch ($nilai) {
        case ($nilai >= 71);
        echo "Nama mahasiswa : {$nama},<br> Nilai: {$nilai},<br> Program Pelatihan : {$proglat},<br> Keterangan : Lulus.<br>";
        break;
        case ($nilai >= 50);
        echo "Nama mahasiswa : {$nama},<br> Nilai: {$nilai},<br> Program Pelatihan : {$proglat},<br> Keterangan : Tidak lulus.<br>";
        break;
        default:
        echo "Nama mahasiswa : {$nama},<br> Nilai: {$nilai},<br> Program Pelatihan : {$proglat},<br> Keterangan : Drop out.<br>";
    }
?>
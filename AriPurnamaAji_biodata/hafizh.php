<?php

 $namadepan = "Hafizh";
 $namabelakang = "Istanto";
 $namalengkap = $namadepan. " " .$namabelakang;
 $tempatlahir = "Purworejo";
 $tanggallahir = "08-11-2001";
 $alamat = "Tridaya Nuansa Indah, Tambun Selatan";
 $telepon = "+6289677262163";
 $email = "<i>hafizhe35@gmail.com<i/>";


//  echo "Nama Depan : {$namadepan}<br><hr>";
//  echo "Nama Belakang : {$namabelakang}<br><hr>";
//  echo "Namalengkap : {$namalengkap}<br><hr>";
//  echo "TempatLahir : {$tempatlahir}<br><hr>";
//  echo "TanggalLahir: {$tanggallahir}<br><hr>";
//  echo "Alamat      : {$alamat}<br><hr>";
//  echo "telepon     : {$telepon}<br><hr>";
//  echo "email       : <i>{$email}</i><br><hr>";

echo "<h3 align=center>Biodata Peserta</h3>";
echo "<h3 align=center>Junior Web Developer NB 2</h3>";
echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- <h2 align = "center">BIODATA PESERTA PELATIHAN JUNIOR WEB DEVELOPMENT NB 2 </h2>
            <h1 align = "center">KEMENTRIAN KETENAGAKERJAAN </h1> -->

    <table align=center>
        <tr>
            <td colspan=3 style="text-align:center"><img src="man.png" width=200px></td>
        </tr>
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><?php echo $namadepan;?></td>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><?php echo $namabelakang;?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo $namalengkap;?></td>
        </tr><tr>
            <td>TempatLahir</td>
            <td>:</td>
            <td><?php echo $tempatlahir;?></td>
        </tr><tr>
        </tr><tr>
            <td>TanggalLahir</td>
            <td>:</td>
            <td><?php echo $tanggallahir;?></td>
        </tr><tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat;?></td>
        </tr><tr>
            <td>Telepon</td>
            <td>:</td>
            <td><?php echo $telepon;?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $email;?></td>
        </tr>
</body>
</html>
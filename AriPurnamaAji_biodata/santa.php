<?php
    $namadepan = "Santa Patria";
    $namabelakang = "Ika";
    $namalengkap = $namadepan . " ". $namabelakang;
    $tempatlahir = "Jakarta";
    $tanggallahir = "13 Desember 2003";
    $alamat = "Bangunan Barat";
    $telepon = "08888888";
    $email = "patriaika@gmail.com";

    // echo "Nama depan : {$namadepan} <br>";
    // echo "Nama belakang : {$namabelakang} <br>"; 
    // echo "Nama lengkap : {$namalengkap} <br>";
    // echo "Tempat Lahir : {$tempatlahir} <br>";
    // echo "Tanggal Lahir : {$tanggallahir} <br>";
    // echo "Alamat : {$alamat} <br>";
    // echo "Telepon : {$telepon} <br>";
    // echo "email : <i><u>{$email} </u></i><br>";

    echo "<h3 align=center>Biodata Peserta</h3>";
    echo "<h3 align=center>Junior Web Developer NB 2</h3>";
    echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS 1 PHP</title>
</head>
<!-- <body>
<h1 align="center"> BIODATA PESERTA PELATIHAN JUNIOR WEB DEVELOPER NB 2 </h1>
<h2 align="center"> KEMENTERIAN KETENAGAKERJAAN</h2><tr> -->
    <table align="center">
        <tr>
            <td colspan=3 style="text-align:center"><img src="women.png" width=200px></td>
        </tr>
        <tr>
            <td> Nama depan </td>
            <td> : </td>
            <td> <?php echo "{$namadepan}" ?></td>
        </tr>
        <tr>
            <td> Nama belakang </td>
            <td> : </td>
            <td> <?php echo "{$namabelakang}" ?></td>
        </tr>
        <tr>
            <td> Nama lengkap </td>
            <td> : </td>
            <td> <?php echo "{$namalengkap}" ?></td>
        </tr>
        <tr>
            <td> Tempat lahir </td>
            <td> : </td>
            <td> <?php echo "{$tempatlahir}" ?></td>
        </tr>
        <tr>
            <td> Tanggal lahir </td>
            <td> : </td>
            <td> <?php echo "{$tanggallahir}" ?></td>
        </tr>
        <tr>
            <td> Alamat </td>
            <td> : </td>
            <td> <?php echo "{$alamat}" ?></td>
        </tr>
        <tr>
            <td> Telepon </td>
            <td> : </td>
            <td> <?php echo "{$telepon}" ?></td>
        </tr>
        <tr>
            <td> Email </td>
            <td> : </td>
            <td> <u><i> <?php echo "{$email}" ?></i></u></td>
        </tr>

</body>
</html>
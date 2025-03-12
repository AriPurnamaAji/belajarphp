<?php
    $namadepan = "Shafira";
    $namabelakang = "Putri Maharani";
    $namalengkap = $namadepan." ".$namabelakang;
    $ttl = "Jakarta";
    $ttl2 = "9 September 2002";
    $alamat = "Summarecon Bekasi";
    $nohp = "08111020910";
    $email = "work.shafiraputri@gmail.com";

    // echo "Nama depan : {$namadepan} <br>" ; 
    // echo "Nama Belakang : {$namabelakang} <br>";
    // echo "Nama Lengkap : {$namalengkap} <br>";
    // echo "Tempat Lahir : {$ttl}<br>";
    // echo "Tanggal Lahir : {$ttl2}<br>";
    // echo "Alamat : {$alamat} <br>";
    // echo "Telepon : {$nohp}<br>";
    // echo "Email : <i><u>{$email}</u></i><br>";

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
<!-- <h2 align="center"> BIODATA PESERTA PELATIHAN
    <br>
    JUNIOR WEB DEVELOPER NB 2
    <br>
    KEMENTERIAN KETENAGAKERJAAN RI</h2>
    <hr> -->
        <table align="center">
        <tr>
        <tr>
            <td colspan=3 style="text-align:center"><img src="women.png" width=200px></td>
        </tr>
        </tr>
        <tr> 
            <td>Nama depan </td>
            <td> : </td>
            <td> <?php echo "{$namadepan}"?></td>
        </tr>
        <tr> 
            <td>Nama belakang </td>
            <td> : </td>
            <td> <?php echo "{$namabelakang}"?></td>
        </tr>
        <tr> 
            <td>Nama lengkap </td>
            <td> : </td>
            <td> <?php echo "{$namalengkap}"?></td>
        </tr>
        <tr> 
            <td>Tempat Lahir </td>
            <td> : </td>
            <td>  <?php echo "{$ttl}"?></td>
        </tr>
        <tr> 
            <td>Tanggal Lahir </td>
            <td> : </td>
            <td>  <?php echo "{$ttl2}"?></td>
        </tr>
        <tr> 
            <td>Alamat </td>
            <td> : </td>
            <td>  <?php echo "{$alamat}"?></td>
        </tr>
        <tr> 
            <td>Telepon</td>
            <td> : </td>
            <td>  <?php echo "{$nohp}"?></td>
        </tr>
        <tr> 
            <td>Email</td>
            <td> : </td>
            <td>  <?php echo "{$email}"?></td>
        </tr>
    </table>
</body>
</html>

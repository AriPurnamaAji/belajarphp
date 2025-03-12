<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $namadepan = "Kukuh";
    $namabelakang = "Ari Prianto";
    $namalengkap = $namadepan." ".$namabelakang;
    $tempatlahir = "Bekasi";
    $tanggallahir = "11 Februari 1999";
    $alamat = "Bekasi Mede, Bekasi Timur";
    $telepon = "081318205120";
    $email = "kukuhari.prianto@gmail.com";
    
    // echo "Nama depan : {$namadepan} <hr>";
    // echo "Nama belakang : {$namabelakang} <hr>";
    // echo "Nama lengkap : {$namalengkap} <hr>";
    // echo "Tempat lahir : {$tempatlahir} <hr>";
    // echo "Tanggal lahir : {$tanggallahir} <hr>";
    // echo "Alamat : {$alamat} <hr>";
    // echo "telepon : {$telepon} <hr>";
    // echo "Email : <i>{$email}</i><hr>";

    echo "<h3 align=center>Biodata Peserta</h3>";
    echo "<h3 align=center>Junior Web Developer NB 2</h3>";
    echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";

?>
    <table align=center>
        <tr>
            <td colspan=3 style="text-align:center"><img src="man.png" width=200px></td>
        </tr>
        <tr>
            <td>Nama depan</td>
            <td>:</td>
            <td><?php echo $namadepan;?></td>
        </tr>
        <tr>
            <td>Nama belakang</td>
            <td>:</td>
            <td><?php echo $namabelakang;?></td>
        </tr>
        <tr>
            <td>Nama lengkap</td>
            <td>:</td>
            <td><?php echo $namalengkap;?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo $tempatlahir;?></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><?php echo $tanggallahir;?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat;?></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><?php echo $telepon;?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><i><?php echo $email;?></i></td>
        </tr>
    </table>  
</body>
</html>
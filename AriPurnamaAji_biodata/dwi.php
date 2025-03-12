<?php  
    $namadepan = "Dwi";
    $namabelakang = "Rachmawaty";
    $namalengkap = $namadepan." ".$namabelakang;
    $tempatlahir = "Depok";
    $tanggallahir = "27 Maret 1994";
    $alamat = "Kebalen, Bekasi";
    $telepon = "082112604957";
    $email = "<i>dwirachmawaty21@gmail.com</i>";

    echo "<h3 align=center>Biodata Peserta</h3>";
    echo "<h3 align=center>Junior Web Developer NB 2</h3>";
    echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";
    
?> 
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Tugas 1</title>
</head>
<body>
    <!-- <img src="https://static.promediateknologi.id/crop/0x0:0x0/0x0/webp/photo/indizone/2021/02/27/gms79Em/tahun-2022-anime-studio-ghibli-spirited-away-akan-diadaptasi-jadi-pertunjukan-panggung73.jpg" width="100px" height="80px"> -->
<!-- <h1>Biodata Peserta Pelatihan<br>Junior Web Developer NB 2<br>
<u>Kementerian Ketenagakerjaan RI</u></h1> -->

<table align=center>
<tr>
    <td colspan=3 style="text-align:center"><img src="women.png" width=200px></td>
</tr>
<tr>
    <td>Nama Depan</td>
    <td>:</td>
    <td><?php echo $namadepan ?></td>
</tr>
<tr>
    <td>Nama Belakang</td>
    <td>:</td>
    <td><?php echo $namabelakang ?></td>
</tr>
<tr>
    <td>Nama Lengkap</td>
    <td>:</td>
    <td><?php echo $namalengkap ?></td>
</tr>
<tr>
    <td>Tempat Lahir</td>
    <td>:</td>
    <td><?php echo $tempatlahir ?></td>
</tr>
<tr>
    <td>Tanggal Lahir</td>
    <td>:</td>
    <td><?php echo $tanggallahir ?></td>
</tr>
<tr>
    <td>Alamat</td>
    <td>:</td>
    <td><?php echo $alamat ?></td>
<tr>
    <td>Telepon</td>
    <td>:</td>
    <td><?php echo $telepon ?></td>
</tr>
<tr>
    <td>Email</td>
    <td>:</td>
    <td><?php echo $email ?></td>
</tr>


</body>
</html>
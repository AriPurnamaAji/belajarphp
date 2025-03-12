<?php
    $namaDepan = "Ari";
    $namaBelakang = "Purnama Aji";
    $namaLengkap = $namaDepan." ".$namaBelakang;
    $tempatLahir = "Jakarta";
    $tanggalLahir = "12 Oktober 2000";
    $alamat = "Perumahan Bekasi Timur Regensi Jl. Murai 8";
    $telepon = "089606361777";
    $email = "<i>aripurnamaaji78@gmail.com</i>";

    echo "<h3 align=center>Biodata Peserta</h3>";
    echo "<h3 align=center>Junior Web Developer NB 2</h3>";
    echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";

    // echo "Nama depan : $namaDepan<br>";
    // echo "Nama belakang : $namaBelakang<br>";
    // echo "Nama lengkap : $namaLengkap<br>";
    // echo "Tempat lahir : $tempatLahir<br>";
    // echo "Tanggal lahir : $tanggalLahir<br>";
    // echo "Alamat : $alamat<br>";
    // echo "Telepon : $telepon<br>";
    // echo "Email : <i>$email</i><br>";
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ari Biodata</title>
    </head>
    <body>
        <table align=center>
        <tr>
            <td colspan=3 style="text-align:center;"><img src="man.png" width=200px></td>
        </tr>
        <tr>
            <td>Nama depan</td>
            <td>:</td>
            <td><?php echo $namaDepan; ?></td>
        </tr>
        <tr>
            <td>Nama belakang</td>
            <td>:</td>
            <td><?php echo $namaBelakang; ?></td>
        </tr>
        <tr>
            <td>Nama lengkap</td>
            <td>:</td>
            <td><?php echo $namaLengkap;?></td>
        </tr>
        <tr>
            <td>Tempat lahir</td>
            <td>:</td>
            <td><?php echo $tempatLahir;?></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><?php echo $tanggalLahir;?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat;?></td>
        </tr>
        <tr>
            <td>Telepon</td>
            <td>:</td>
            <td><?php echo $telepon?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo $email?></td>
        </tr>
        </table>
    </body>
</html>
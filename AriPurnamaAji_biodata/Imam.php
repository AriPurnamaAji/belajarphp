<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $namaDepan = "Imam";
    $namaBelakang = "Suryaman";
    $namaLengkap = $namaDepan." ".$namaBelakang;
    $tempatLahir = "Jakarta";
    $tanggalLahir = " 2001";
    $alamat = "Gg. Warga no.28";
    $telp = "0855917872";
    $email = "muhamadimamsuryaman@gmail.com";

//    echo "Nama Depan : $namaDepan <hr>";
//   echo "Nama Belakang : $namaBelakang <hr> ";
//    echo "Nama Lengkap : $namaLengkap <hr> ";
//    echo "Tempat Lahir : $tempatLahir  <hr>";
//    echo "Tanggal Lahir : $tanggalLahir<hr>";
//    echo "Alamat : $alamat <hr>";
//    echo "Telepon : $telp <hr>";
//    echo "<i>email : <u>$email </u> </i><hr>";

echo "<h3 align=center>Biodata Peserta</h3>";
echo "<h3 align=center>Junior Web Developer NB 2</h3>";
echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";

?>
<!-- <h2>Biodata Peserta</h2>
<h3>Junior Web Developer NB 2</h3>
<h3>KEMENTRIAN KETENAGAKERJAAN RI</h3> -->
    <table align=center>
        <tr>
            <td colspan=3 style="text-align:center"><img src="man.png" width=200px></td>
        </tr>
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><?php echo $namaDepan ; ?></td>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><?php echo $namaBelakang ; ?></td>
        </tr>
        <tr>
            <td>Nama lengkap</td>
            <td>:</td>
            <td><?php echo $namaLengkap ; ?></td>
        </tr>
        <tr>
            <td>Tempat lahir</td>
            <td>:</td>
            <td><?php echo $tempatLahir ; ?></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td>:</td>
            <td><?php echo $tanggalLahir ; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat ; ?></td>
        </tr>
        <tr>
            <td>No. Telepon</td>
            <td>:</td>
            <td><?php echo $telp ; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><i><?php echo $email; ?></i></td>
        </tr>
        

    </table>
</body>
</html>
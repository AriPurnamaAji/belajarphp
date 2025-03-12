<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML | PHP</title>
</head>
<body>
<?php
// Biodata Peserta
// Junior Web Developer NB 2
// Kementrian Ketenagakerjaan RI

// Nama Depan
// nama belakang
// nama lengkap
//tempat lahir
//alamat 
// telephon
//email

$namaDepan = "Azis";
$namaBelakang = "Hakiki";
$namaLengkap = $namaDepan." ".$namaBelakang;
$tempatLahir = "Lebak";
$tanggalLahir = "03-10-2002";
$tlp = 6285694997960;
$email = "<i>mohazizhakiki@gmail.com</i>";

/*echo "Nama Depan : $namaDepan <br>";
echo "Nama Belakang : $namaBelakang <br>";
echo "Nama Lengkap : $namaLengkap <br>";
echo "Tempat Lahir : $tempatLahir <br>";
echo "Telephone : $tlp <br>";
echo "Email : $email <br>";*/

echo "<h3 align=center>Biodata Peserta</h3>";
echo "<h3 align=center>Junior Web Developer NB 2</h3>";
echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";

?>
<!-- <h3>Biodata Peserta</h3>
<p>Jubior Web Developer NB 2 <br>
Kementrian Ketenagakerjaan RI</p><hr> -->
<table align=center>
        <tr>
            <td colspan=3 style="text-align:center"><img src="man.png" width=200px></td>
        </tr>
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><?php echo "$namaDepan" ?>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><?php echo "$namaBelakang" ?>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php echo "$namaLengkap" ?>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php echo "$tempatLahir" ?>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo "$tanggalLahir" ?>
        </tr>
        <tr>
            <td>Telephone</td>
            <td>:</td>
            <td><?php echo "$tlp" ?>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php echo "$email" ?>
        </tr>
    </table>
</body>
</html>

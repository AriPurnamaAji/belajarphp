<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <?php
    $namaDepan = "Muhammad";
    $namaTengah = "Alief";
    $namaBelakang = "Sulton";
    $namaLengkap = $namaDepan." ". $namaTengah." ".$namaBelakang;
    $tempatLahir = "Bekasi";
    $tanggalLahir = "05 Januari 2001";
    $alamat = "Cibarusah Kabupaten Bekasi";
    $telepon = "082213961010";
    $email = "maliefsultonz@gmail.com";

    echo "<h3 align=center>Biodata Peserta</h3>";
    echo "<h3 align=center>Junior Web Developer NB 2</h3>";
    echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";
    ?>
    <table align=center>
    <tr>
        <td colspan=3 style="text-align:center;"><img src="man.png" width=200px></td>
    </tr>
    <tr>
        <td>Nama </td>
        <td>:</td>
        <td><?php echo "{$namaDepan}";?><br></td>
    </tr>
    <tr>
        <td>Nama Belakang</td>
        <td>:</td>
        <td><?php echo "{$namaBelakang}";?><br></td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td>:</td>
        <td><?php echo "{$namaLengkap}";?><br></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><?php echo "{$tempatLahir}";?><br></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo "{$tanggalLahir}";?><br></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo "{$alamat}";?><br></td>
    </tr>
    <tr>
        <td>Telepon</td>
        <td>:</td>
        <td><?php echo "{$telepon}";?><br></td>
    </tr>
    </table>
 </body>
 </html>
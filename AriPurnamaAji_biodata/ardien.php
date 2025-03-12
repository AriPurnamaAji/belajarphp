<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP inside HTML</title>
</head>
<body>
    <?php
        $NamaDepan = "Linear";
        $NamaBelakang = "Addien";
        $NamaLengkap = $NamaDepan." ".$NamaBelakang;
        $NomorHP = 62895639249278;
        $TempatLahir = "Brebes";
        $TanggalLahir = "19 Mei 1992";
        $Alamat = "Kabupaten Bekasi";
        $Email = "erdin.linear@gmail.com";

        echo "<h3 align=center>Biodata Peserta</h3>";
        echo "<h3 align=center>Junior Web Developer NB 2</h3>";
        echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";

    ?>
    <!-- <h3>Biodata Peserta</h3>
    <p> Junior Web Developer <br>
        Kementerian Tenaga Kerja Indonesia </p><hr> -->

    <table align=center>
        <tr>
            <td colspan=3 style="text-align:center;"><img src="man.png" width=200px></td>
        </tr>
        <tr>
            <td>Nama Depan</td>
            <td>:</td>
            <td><?php Echo $NamaDepan; ?></td>
        </tr>
        <tr>
            <td>Nama Belakang</td>
            <td>:</td>
            <td><?php Echo $NamaBelakang; ?></td>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?php Echo $NamaLengkap; ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><?php Echo $TempatLahir; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php Echo $TanggalLahir; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php Echo $Alamat; ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td><?php Echo $NomorHP; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><?php Echo $Email; ?></td>
        </tr>
    </table>
</body>
</html>
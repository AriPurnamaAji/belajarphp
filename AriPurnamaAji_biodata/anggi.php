<?php
    $namadepan ="Anggi";
    $namabelakang= "Oktavia";
    $namalengkap= $namadepan. " " .$namabelakang;
    $tempatlahir="Bandung";
    $tanggallahir="17-10-06";
    $alamat="Bekasi Timur Perumnas 3";
    $telpon="089618514115";
    $email="anggiokta@gmail.com";

    echo "<h3 align=center>Biodata Peserta</h3>";
    echo "<h3 align=center>Junior Web Developer NB 2</h3>";
    echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";

?>

<!DOCTYPE html>
    <html>
        <head>
            <title>Anggi Biodata</title>
        </head>
        <body>
            <!-- <h2 align = "center">BIODATA PESERTA PELATIHAN JUNIOR WEB DEVELOPMENT NB 2 </h2>
            <h1 align = "center">KEMENTRIAN KETENAGAKERJAAN </h1> -->
            <table align=center>
                <tr>
                    <td colspan=3 style="text-align:center"><img src="women.png" width=200px></td>
                </tr>
            <tr>
                <td>Nama Depan</td>
                <td>:</td>
                <td><?php echo "$namadepan"?> </td>
                </tr>

                <tr>
                <td>Nama Belakang</td>
                <td>:</td>
                <td><?php echo "$namabelakang"?> </td>
                </tr>

                <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><?php echo "$namalengkap"?> </td>
                </tr>

                <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><?php echo "$tempatlahir"?> </td>
                </tr>

                <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><?php echo "$tanggallahir"?> </td>
                </tr>

                <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><?php echo "$alamat"?> </td>
                </tr>

                <tr>
                <td>No. Telp</td>
                <td>:</td>
                <td><?php echo "$telpon"?> </td>
                </tr>

                <tr>
                <td>Email</td>
                <td>:</td>
                <td><i><?php echo "$email"?></i></td>
                </tr>
</body>
</html>
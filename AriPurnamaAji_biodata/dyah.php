<?php
    $namadepan = "Dyah";
    $namabelakang = "Kusumawardani";
    $namalengkap = $namadepan." ".$namabelakang;
    $tempatlahir = "Jakarta";
    $tgllahir = "26 April";
    $alamat = "Jl Dewi Sartika, Jakarta Timur";
    $telpon = 628980842929;
    $email = "dyakuuwa@gmail.com";

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
    <!-- <h2> Biodata Peserta </h2>
    <p>Junior Web Developer NB 2 <br>
    Kementerian Ketenagakerjaan RI </p> -->

    <table align=center>
        <tr>
            <td colspan=3 style="text-align:center"><img src="women.png" width=200px></td>
        </tr>
        <tr>
            <td> Nama Depan </td>
            <td> : </td>
            <td> <?php echo $namadepan ?> </td>
        </tr>
        <tr>
            <td> Nama Belakang </td>
            <td> : </td>
            <td> <?php echo $namabelakang ?> </td>
        </tr>
        <tr>
            <td> Nama lengkap </td>
            <td> : </td>
            <td> <?php echo $namalengkap ?> </td>

            <tr>
            <td> Tempat Lahir </td>
            <td> : </td>
            <td> <?php echo $tempatlahir ?> </td>

            <tr>
            <td> Tanggal lahir </td>
            <td> : </td>
            <td> <?php echo $tgllahir ?> </td>

            <tr>
            <td> Alamat </td>
            <td> : </td>
            <td> <?php echo $alamat ?> </td>

            <tr>
            <td> Telepon </td>
            <td> : </td>
            <td> <?php echo $telpon ?> </td>

            <tr>
            <td> Email </td>
            <td> : </td>
            <td> <?php echo $email ?> </td>
    </table>

</body>
</html>
    
    

    


<?php
     $namadepan = "Nadhira";
     $namabelakang = "Anysa";
     $namalengkap = $namadepan." ".$namabelakang;
     $tempatlahir = "Jakarta";
     $tanggallahir = "21 Maret 2002";
     $alamat = "Komplek Jatimelati Bulog 3";
     $telepon = "087881443459";
     $email = "<i>nadhira.anysa@gmail.com<i>";

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
    <!-- <h3 align="center"> Biodata Peserta </h3>
    <h3 align="center"> Junior Web Developer NB2 </h3>
    <h3 align="center"> Kementerian Ketenagakerjaan RI </h3> -->
    <table align=center>
        <tr>
            <td colspan=3 style="text-align:center"><img src="women.png" width=200px></td>
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
            <td>  <?php echo "{$tempatlahir}"?></td>
        </tr>
        <tr> 
            <td>Alamat </td>
            <td> : </td>
            <td>  <?php echo "{$alamat}"?></td>
        </tr>
        <tr> 
            <td>Telepon</td>
            <td> : </td>
            <td>  <?php echo "{$telepon}"?></td>
        </tr>
        <tr> 
            <td>Email</td>
            <td> : </td>
            <td>  <?php echo "{$email}"?></td>
        </tr>
    </table>
</body>
</html>

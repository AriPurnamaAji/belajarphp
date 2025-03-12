<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>
    <?php
    $nama_depan = "Syahrul";
    $nama_belakang = "Gunawan";
    $nama_lengkap = $nama_depan." ".$nama_belakang;
    $tempat_lahir = "Jakarta";
    $tanggal_lahir = "1 Mei 1998";
    $alamat = "Kemayoran,Jakarta Pusat";
    $telepon = "082113958988";
    $email = "gsyahrul0105@gmail.com";
    echo "<h3 align=center>Biodata Peserta</h3>";
    echo "<h3 align=center>Junior Web Developer NB 2</h3>";
    echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";
    ?>
    <table align=center>
    <tr>
        <td colspan=3 style="text-align:center;"><img src="man.png" width=200px></td>
    </tr>
    <tr>
        <td>Nama Depan</td>
        <td> :</td>
        <td><?php echo $nama_depan ?></td>
    </tr>
    <tr>
        <td>Nama Belakang</td>
        <td> :</td>
        <td><?php echo $nama_belakang ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap</td>
        <td> :</td>
        <td><?php echo $nama_lengkap ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td> :</td>
        <td><?php echo $tempat_lahir ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td> :</td>
        <td><?php echo $tanggal_lahir ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td> :</td>
        <td><?php echo $alamat ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td> :</td>
        <td><?php echo $telepon ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td> :</td>
        <td><?php echo $email ?></td>
    </tr>
    </table>
    
</body>
</html>
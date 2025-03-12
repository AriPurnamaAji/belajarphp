<?php
    // Data biodata disimpan dalam array asosiatif
    $biodata = [
        "Nama Depan" => "Muhammad Odi",
        "Nama Belakang" => "Hafidz setiawan",
        "Nama Lengkap" => "Muhammad Odi Hafidz setiawan",
        "Tempat Lahir" => "Bekasi",
        "Tanggal Lahir" => "21-08-2002",
        "Alamat" => "Wisma Jaya",
        "Telepon" => "085893842350",
        "Email" => "<i>muhammadodi2108@gmail.com</i>"
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Peserta</title>
</head>
<body>
    <!-- <h1>Biodata Peserta</h1>
    <p>Junior Web Developer NB 2<br>
    Kementerian Ketenagakerjaan RI</p>
    <hr> -->
    <?php
    echo "<h3 align=center>Biodata Peserta</h3>";
    echo "<h3 align=center>Junior Web Developer NB 2</h3>";
    echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";
    ?>
    <table align=center>
        <tr>
            <td colspan=3 style="text-align:center"><img src="man.png" width=200px></td>
        </tr>
        <?php
            // Loop melalui array $biodata untuk membuat baris tabel
            foreach ($biodata as $key => $value) {
                echo "<tr>";
                echo "<td>{$key}</td>"; // Kolom untuk label (kunci array)
                echo "<td>:</td>";      // Kolom untuk tanda titik dua
                echo "<td>{$value}</td>"; // Kolom untuk nilai
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
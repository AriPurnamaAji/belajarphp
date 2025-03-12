<?php
    // Data biodata disimpan dalam array asosiatif
    $biodata = [
        "Nama Depan" => "Ari",
        "Nama Belakang" => "Purnama Aji",
        "Nama Lengkap" => "Ari Purnama Aji",
        "Tempat Lahir" => "Jakarta",
        "Tanggal Lahir" => "12 Oktober 1998",
        "Alamat" => "Perumahan Bekasi Timur Regensi Jl. Murai 8",
        "Telepon" => "089606361777",
        "Email" => "<i>aripurnamaaji78@gmail.com</i>"
    ];

    echo "Biodata Peserta <br>";
    echo "Junior Web Developer NB 2 <br>";
    echo "Kementrian Ketenagakerjaan RI <br><hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Peserta</title>
</head>
<body>
    <img src="">
    <table>
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
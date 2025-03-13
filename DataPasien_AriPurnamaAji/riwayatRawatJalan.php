<?php
$kode = $_GET['Nrm'];

$current_data = file_get_contents('dataRawatJalan.json');
$array_data = json_decode($current_data, true);

$dokter_data = file_get_contents('dokter.json');
$dokter_array = json_decode($dokter_data, true);

$riwayat = [];

foreach ($array_data as $listdata) {
    if ($listdata['Nrm'] == $kode) {
        $nama = $listdata['Nama'];
        $nrm = $listdata['Nrm'];
        $riwayat[] = $listdata;
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Pasien</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Tabel */
        table {
            width: 90%;
            margin: 1px auto;
            border-collapse: collapse;
            background-color: white;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav>
        <a href="#">Home</a>
        <a href="pasien.php">Pasien</a>
        <a href="rawatJalan.php">Rawat Jalan</a>
        <a href="dokter.php">Dokter</a>
    </nav>

    <h2>Riwayat Rawat Jalan Pasien</h2>
    <h3><?= $nama ?></h3>
    <h4><?= $nrm ?></h4>

    <table>
        <tr>
            <th>No.</th>
            <th>Kode Rawat</th>
            <th>Waktu Kunjungan</th>
            <th>Keluhan</th>
            <th>Diagnosa</th>
            <th>Dokter yang menangani</th>
        </tr>
        <?php foreach ($riwayat as $x => $listdata) { ?>
            <tr>
                <td><?= $x + 1 ?></td>
                <td><?= $listdata['Kode_rawat'] ?></td>
                <td><?= $listdata['Waktu_kunjungan'] ?></td>
                <td><?= $listdata['Keluhan']; ?></td>
                <td><?= $listdata['Diagnosa'] ?></td>
                <td>
                    <?php
                    // Mencari dokter berdasarkan Nip_dokter yang sesuai dengan data pasien
                    $nama_dokter = "Tidak ditemukan";
                    $spesialis = "Tidak ditemukan";

                    foreach ($dokter_array as $dokter) {
                        if ($dokter['Nip_dokter'] == $listdata['Nip_dokter']) {
                            $nama_dokter = $dokter['Nama'];
                            $spesialis = $dokter['Spesialisasi'];
                            break; // Keluar dari loop jika dokter ditemukan
                        }
                    }
                    ?>
                    <?= $nama_dokter ?><br>
                    Spesialis: <?= $spesialis ?>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>
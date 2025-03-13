<?php
// include "menubar.php";
include "function.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rawat Jalan</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* Tabel */
        table {
            width: 90%;
            margin: 1px auto;
            border-collapse: collapse;
            background-color: white;
            /* box-shadow: 0 0 10px rgba(0,0,0,0.1); */
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
    <br>
    <h2>Data Rawat Jalan</h2>
    <table>
        <tr>
            <th>No.</th>
            <th>Kode Rawat</th>
            <th>Pasien</th>
            <th>Dokter</th>
            <th>Waktu Kunjungan</th>
            <th>Keluhan</th>
            <th>Diagnosa</th>
            <th colspan=2>Proses</th>
        </tr>
        <?php
        if (file_exists('dataRawatJalan.json')) { //buat memastikan data ada / tidak
            $current_data = file_get_contents('dataRawatJalan.json'); //menarik data
            $array_data = json_decode($current_data, true);
            foreach ($array_data as $index => $data) { ?>
                <tr>
                    <td><?= $index + 1 .  "."; ?></td>
                    <td><a href="detailPasien.php?kode=<?= $data['Kode_rawat'] ?>"><?= $data['Kode_rawat']; ?></a></td>
                    <?php
                    $pasien_data = file_get_contents('data.json');
                    $pasien_array = json_decode($pasien_data, true);
                    foreach ($pasien_array as $nama_pasien) {
                        if ($nama_pasien['Nrm'] == $data['Nrm']) {
                    ?>
                            <td><a href="riwayatRawatJalan.php?Nrm=<?= $nama_pasien['Nrm'] ?>"><?= $nama_pasien['Nama'] ?></a></td>

                    <?php
                        }
                    }
                    ?>

                    <?php
                    $dokter_data = file_get_contents('dokter.json');
                    $dokter_array = json_decode($dokter_data, true);
                    foreach ($dokter_array as $dokter) {
                        if ($dokter['Nip_dokter'] == $data['Nip_dokter']) {
                    ?>
                            <td><?= $dokter['Nama'] ?></td>
                    <?php
                        }
                    }
                    ?>
                    <td><?= $data['Waktu_kunjungan']; ?></td>
                    <td><?= $data['Keluhan']; ?></td>
                    <td><?= $data['Diagnosa']; ?></td>
                    <td>
                        <a href="editRawatJalan.php?Nrm=<?= $data['Nrm'] ?> "><button class=buttonOk>Edit</button></a>
                    </td>
                    <td>
                        <a href="deleteRawatJalan.php?Kode_rawat=<?= $data['Kode_rawat'] ?>" onclick="return confirm('Yakin anda ingin menghapus data dengan Kode Rawat <?= $data['Kode_rawat'] ?>?')"><button class=buttonClose>Delete</button></a>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
    </table>

</body>

</html>
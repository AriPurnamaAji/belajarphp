<?php
// include "menubar.php";
include "function.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <link rel="stylesheet" href="model.css">
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
    <h2>Daftar Data Pasien</h2>
    <table>
        <tr>
            <td colspan=10 style="text-align: center; padding: 1px; background-color: f4f4f4; border: 1px solid #f4f4f4;"></td>
            <td style="text-align: right; padding: 10px; background-color: #f4f4f4; border: 1px solid #f4f4f4;">
                <a href="addPasien.php"><button class="buttonOk">Add</button></a>
            </td>
        </tr>
        <tr>
            <th>No.</th>
            <th>No. Rekam Medis</th>
            <th>Nama Pasien</th>
            <th>Jenis Kelamin</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>No. Telepon</th>
            <th>Alamat</th>
            <th>Tanggal Daftar</th>
            <th colspan=2>Proses</th>
        </tr>
        <?php
        if (file_exists('data.json')) { //buat memastikan data ada / tidak
            $current_data = file_get_contents('data.json'); //menarik data
            $array_data = json_decode($current_data, true);
            foreach ($array_data as $index => $data) { ?>
                <tr>
                    <td><?= $index + 1 .  "."; ?></td>
                    <td><?= $data['Nrm']; ?></td>
                    <td><?= $data['Nama']; ?></td>
                    <td><?= $data['Gender']; ?></td>
                    <td><?= $data['Tempat_lahir']; ?></td>
                    <td><?= $data['Tanggal_lahir']; ?></td>
                    <td><?= $data['No_telp']; ?></td>
                    <td><?= $data['Alamat']; ?></td>
                    <td><?= $data['Tanggal_daftar']; ?></td>
                    <td>
                        <a href="edit.php?Nrm=<?= $data['Nrm'] ?> "><button class=buttonOk>Edit</button></a>
                    </td>
                    <td>
                        <a href="delete.php?Nrm=<?= $data['Nrm'] ?>" onclick="return confirm('Yakin mau hapus karyawan: <?= $data['Nama'] ?> dengan nrm: <?= $data['Nrm'] ?>?')"><button class=buttonClose>Delete</button></a>
                    </td>
                </tr>
        <?php
            }
        } ?>
    </table>

</body>

</html>
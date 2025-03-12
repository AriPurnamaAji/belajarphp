<?php
// include "menubar.php";
include "function.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
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
        <a href="karyawan.php">Karyawan</a>
        <a href="#">Transaksi</a>
        <a href="#">Logout</a>
    </nav>
    <h2>Daftar Data Karyawan</h2>
    <table>
        <tr>
            <td colspan=10 style="text-align: center; padding: 1px; background-color: f4f4f4; border: 1px solid #f4f4f4;"></td>
            <td style="text-align: right; padding: 10px; background-color: #f4f4f4; border: 1px solid #f4f4f4;">
                <a href="addKaryawan.php"><button class="buttonOk">Add</button></a>
            </td>
        </tr>
        <tr>
            <th>No.</th>
            <th>NIK</th>
            <th>Nama Karyawan</th>
            <th>Jabatan</th>
            <th>Gaji Pokok</th>
            <th>Tunjangan</th>
            <th>Status</th>
            <th>Jumlah Anak</th>
            <th>Tunjangan Anak</th>
            <th colspan=2>Proses</th>
        </tr>
        <?php
        if (file_exists('data.json')) { //buat memastikan data ada / tidak
            $current_data = file_get_contents('data.json'); //menarik data
            $array_data = json_decode($current_data, true);
            foreach ($array_data as $index => $data) { ?>
                <tr>
                    <td><?= $index + 1 .  "."; ?></td>
                    <td><?= $data['Nik']; ?></td>
                    <td><?= $data['Nama']; ?></td>
                    <td><?= $data['Jabatan']; ?></td>
                    <td><?= $data['Gaji_Pokok']; ?></td>
                    <td><?= $data['Tunjangan']; ?></td>
                    <td><?= $data['Status']; ?></td>
                    <td><?= $data['Anak']; ?></td>
                    <td><?= $data['Tunj_Anak']; ?></td>
                    <td>
                        <a href="edit.php?Nik=<?= $data['Nik'] ?> "><button class=buttonOk>Edit</button></a>
                    </td>
                    <td>
                        <a href="delete.php?Nik=<?= $data['Nik'] ?>" onclick="return confirm('Yakin mau hapus karyawan: <?= $data['Nama'] ?> dengan nik: <?= $data['Nik'] ?>?')"><button class=buttonClose>Delete</button></a>
                    </td>
                </tr>
        <?php
            }
        } ?>
    </table>

</body>

</html>
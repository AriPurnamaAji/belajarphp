<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="">HOME</a>
        <a href="pasien.php">PASIEN</a>
        <a href="rawat.php">RAWAT JALAN</a>
        <a href="">DOKTER</a>
    </nav>
    <button class="tambah-pasien"><a href="form.php" class="tombol-link">Tambah Pasien</a></button>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>NRM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
                <th>Tanggal Daftar</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (file_exists('data.json')) {
                $current_data = file_get_contents('data.json');
                $array_data = json_decode($current_data, true);
                $no = 1;
                foreach ($array_data as $listdata) {
            ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $listdata['nrm'] ?></td>
                        <td><?= $listdata['nama'] ?></td>
                        <td><?= $listdata['jenis_kelamin'] ?></td>
                        <td><?= $listdata['tempat_lahir'] ?></td>
                        <td><?= $listdata['tanggal_lahir'] ?></td>
                        <td><?= $listdata['no_tlp'] ?></td>
                        <td><?= $listdata['alamat'] ?></td>
                        <td><?= $listdata['tgl_daftar'] ?></td>
                        <td>
                            <a href="edit.php?nrm=<?= $listdata['nrm'] ?>">
                                <button class="buttonOK">Edit</button>
                            </a>
                        </td>
                        <td>
                            <a href="delete.php?nrm=<?= $listdata['nrm'] ?>"
                                onclick="return confirm('Yakin anda ingin menghapus data pasien dengan nama <?= $listdata['nama'] ?> dengan nrm <?= $listdata['nrm'] ?>?')">
                                <button class="button2">Delete</button>
                            </a>
                        </td>
                    </tr>

            <?php
                    $no++;
                }
            }
            ?>

        </tbody>
    </table>
</body>

</html>
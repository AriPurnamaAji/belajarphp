<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="">HOME</a>
        <a href="pasien.php">PASIEN</a>
        <a href="rawat.php">RAWAT JALAN</a>
        <a href="">DOKTER</a>
    </nav>
    <button class="tambah-pasien"><a href="form_rj.php" class="tombol-link">Tambah</a></button>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Kode Rawat</th>
                <th>Pasien</th>
                <th>Dokter</th>
                <th>Waktu Kunjungan</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        <tbody>
            <?php

            if (file_exists('rawat.json')) {
                $current_data = file_get_contents('rawat.json');
                $array_data = json_decode($current_data, true);
                $no = 1;
                foreach ($array_data as $listdata) {
            ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><a href="detailrawat.php?kode=<?= $listdata['kode_rawat'] ?>"><?= $listdata['kode_rawat'] ?></a></td>
                        <?php
                        $pasien_data = file_get_contents('data.json');
                        $pasien_array = json_decode($pasien_data, true);
                        foreach ($pasien_array as $namapasien) {
                            if ($namapasien['nrm'] == $listdata['nrm']) {
                        ?>
                                <td><?= $namapasien['nama'] ?></td>
                        <?php
                            }
                        }
                        ?>

                        <?php
                        $dokter_data = file_get_contents('dokter.json');
                        $dokter_array = json_decode($dokter_data, true);
                        foreach ($dokter_array as $dokter) {
                            if ($dokter['dokter_nip'] == $listdata['dokter_nip']) {
                        ?>
                                <td><?= $dokter['nama'] ?></td>
                        <?php
                            }
                        }
                        ?>
                        <td><?= $listdata['tgl_periksa'] ?></td>
                        <td>
                            <a href="edit.php?nrm=<?= $listdata['nrm'] ?>">
                                <button class="buttonOK">Edit</button>
                            </a>
                        </td>
                        <td>
                            <a href="delete.php?nrm=<?= $listdata['kode_rawat'] ?>"
                                onclick="return confirm('Yakin anda ingin menghapus data dengan Kode Rawat <?= $listdata['kode_rawat'] ?> dengan Kode Rawat <?= $listdata['kode_rawat'] ?>?')">
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
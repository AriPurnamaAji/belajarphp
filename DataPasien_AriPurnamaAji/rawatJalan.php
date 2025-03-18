<?php
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Rawat Jalan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="home.php">RS Purnama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="pasien.php">Pasien</a></li>
                    <li class="nav-item"><a class="nav-link active" href="rawatJalan.php">Rawat Jalan</a></li>
                    <li class="nav-item"><a class="nav-link" href="dokter.php">Dokter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Data Rawat Jalan</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No.</th>
                        <th>Kode Rawat</th>
                        <th>Pasien</th>
                        <th>Dokter</th>
                        <th>Waktu Kunjungan</th>
                        <th>Keluhan</th>
                        <th>Diagnosa</th>
                        <th colspan="2">Detail Pasien</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (file_exists('dataRawatJalan.json')) {
                        $current_data = file_get_contents('dataRawatJalan.json');
                        $array_data = json_decode($current_data, true);
                        foreach ($array_data as $index => $data) { ?>
                            <tr>
                                <td><?= $index + 1 . "." ?></td>
                                <td><?= $data['Kode_rawat']; ?></td>
                                <td><?= $data['Nama']; ?></td>
                                <?php
                                $dokter_data = file_get_contents('dokter.json');
                                $dokter_array = json_decode($dokter_data, true);
                                foreach ($dokter_array as $dokter) {
                                    if ($dokter['Nip_dokter'] == $data['Nip_dokter']) {
                                ?>
                                        <td><?= $dokter['Nama']; ?></td>
                                <?php
                                    }
                                }
                                ?>
                                <td><?= $data['Waktu_kunjungan']; ?></td>
                                <td><?= $data['Keluhan']; ?></td>
                                <td><?= $data['Diagnosa']; ?></td>
                                <td>
                                    <a href="detailPasien.php?kode=<?= $data['Kode_rawat'] ?>" class="btn btn-primary btn-sm">Detail</a>
                                </td>
                                <?php
                                $pasien_data = file_get_contents('data.json');
                                $pasien_array = json_decode($pasien_data, true);
                                foreach ($pasien_array as $nama_pasien) {
                                    if ($nama_pasien['Nrm'] == $data['Nrm']) {
                                ?>
                                        <td>
                                            <a href="riwayatRawatJalan.php?Nrm=<?= $nama_pasien['Nrm'] ?>" class="btn btn-danger btn-sm">Riwayat</a>
                                        </td>
                                <?php
                                    }
                                }
                                ?>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
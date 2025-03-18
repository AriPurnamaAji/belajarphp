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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="home.php">RS Purnama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="pasien.php">Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="rawatJalan.php">Rawat Jalan</a></li>
                    <li class="nav-item"><a class="nav-link" href="dokter.php">Dokter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center">Riwayat Rawat Jalan Pasien</h2>
        <h3 class="text-center text-primary"><?= $nama ?></h3>
        <h4 class="text-center mb-4 text-primary">NRM: <?= $nrm ?></h4>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No.</th>
                        <th>Kode Rawat</th>
                        <th>Waktu Kunjungan</th>
                        <th>Keluhan</th>
                        <th>Diagnosa</th>
                        <th>Dokter yang Menangani</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($riwayat as $x => $listdata) { ?>
                        <tr>
                            <td><?= $x + 1 ?></td>
                            <td><?= $listdata['Kode_rawat'] ?></td>
                            <td><?= $listdata['Waktu_kunjungan'] ?></td>
                            <td><?= $listdata['Keluhan']; ?></td>
                            <td><?= $listdata['Diagnosa'] ?></td>
                            <td>
                                <?php
                                $nama_dokter = "Tidak ditemukan";
                                $spesialis = "Tidak ditemukan";

                                foreach ($dokter_array as $dokter) {
                                    if ($dokter['Nip_dokter'] == $listdata['Nip_dokter']) {
                                        $nama_dokter = $dokter['Nama'];
                                        $spesialis = $dokter['Spesialisasi'];
                                        break;
                                    }
                                }
                                ?>
                                <?= $nama_dokter ?><br>
                                <small class="text-muted">Spesialis: <?= $spesialis ?></small>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
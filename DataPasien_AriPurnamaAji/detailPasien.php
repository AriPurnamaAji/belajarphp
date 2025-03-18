<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<?php
$kode = $_GET['kode'];
$current_data = file_get_contents('dataRawatJalan.json');
$array_data = json_decode($current_data, true);
foreach ($array_data as $listdata) {
    if ($listdata['Kode_rawat'] == $kode) {
        $pasien_data = file_get_contents('data.json');
        $pasien_array = json_decode($pasien_data, true);
        foreach ($pasien_array as $pasien) {
            if ($pasien['Nrm'] == $listdata['Nrm']) {
                $nrm = $pasien['Nrm'];
                $nama = $pasien['Nama'];
                $gender = $pasien['Gender'];
                $tempat_lahir = $pasien['Tempat_lahir'];
                $tanggal_lahir = $pasien['Tanggal_lahir'];
                $no_telp = $pasien['No_telp'];
                $alamat = $pasien['Alamat'];
            }
        }
        $dokter_data = file_get_contents('dokter.json');
        $dokter_array = json_decode($dokter_data, true);
        foreach ($dokter_array as $dokter) {
            if ($dokter['Nip_dokter'] == $listdata['Nip_dokter']) {
                $namaDr = $dokter['Nama'];
                $nip_dokter = $dokter['Nip_dokter'];
                $spesialis = $dokter['Spesialisasi'];
            }
        }
        $keluhan = $listdata['Keluhan'];
        $diagnosa = $listdata['Diagnosa'];
    }
}
?>

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
                    <li class="nav-item"><a class="nav-link" href="rawatJalan.php">Rawat Jalan</a></li>
                    <li class="nav-item"><a class="nav-link" href="dokter.php">Dokter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center mb-4">Detail Pasien Rawat Jalan</h2>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th colspan="3" class="text-center fw-bold">Detail Pasien</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">NRM Pasien</td>
                        <td>:</td>
                        <td><?= $nrm ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Nama</td>
                        <td>:</td>
                        <td><?= $nama ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= $gender ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Tempat Lahir</td>
                        <td>:</td>
                        <td><?= $tempat_lahir ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= $tanggal_lahir ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">No. Telepon</td>
                        <td>:</td>
                        <td><?= $no_telp ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Alamat</td>
                        <td>:</td>
                        <td><?= $alamat ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Keluhan</td>
                        <td>:</td>
                        <td><?= $keluhan ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Diagnosa</td>
                        <td>:</td>
                        <td><?= $diagnosa ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-primary">
                    <tr>
                        <th colspan="3" class="text-center fw-bold">Detail Dokter</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="fw-bold">Nama Dokter</td>
                        <td>:</td>
                        <td><?= $namaDr ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">NIP Dokter</td>
                        <td>:</td>
                        <td><?= $nip_dokter ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold">Spesialis</td>
                        <td>:</td>
                        <td><?= $spesialis ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>
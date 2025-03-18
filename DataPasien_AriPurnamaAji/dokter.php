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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="pasien.php">Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="rawatJalan.php">Rawat Jalan</a></li>
                    <li class="nav-item"><a class="nav-link active" href="dokter.php">Dokter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="text-center">Data Dokter</h2>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-primary">
                    <tr>
                        <th>No.</th>
                        <th>Nip Dokter</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>No Telepon</th>
                        <th>Alamat</th>
                        <th>Spesialisasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (file_exists('dokter.json')) {
                        $current_data = file_get_contents('dokter.json');
                        $array_data = json_decode($current_data, true);
                        foreach ($array_data as $index => $data) { ?>
                            <tr>
                                <td><?= $index + 1 . "." ?></td>
                                <td><?= $data['Nip_dokter']; ?></td>
                                <td><?= $data['Nama']; ?></td>
                                <td><?= $data['Gender']; ?></td>
                                <td><?= $data['No_telp']; ?></td>
                                <td><?= $data['Alamat']; ?></td>
                                <td><?= $data['Spesialisasi']; ?></td>
                            </tr>
                    <?php }
                    } ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
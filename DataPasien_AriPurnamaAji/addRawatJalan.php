<?php
// include "menubar.php";
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Rawat Jalan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php
    $nrm = $_GET['Nrm'];
    $pasien = file_get_contents('data.json');
    $data = json_decode($pasien, true);

    foreach ($data as $x => $edit) {
        if ($edit['Nrm'] === $nrm) {
            $nama = $edit['Nama'];
        }
    }
    // Untuk membuat urutan kode rawat
    if (file_exists('dataRawatJalan.json')) { //buat memastikan data ada / tidak
        $current_data = file_get_contents('dataRawatJalan.json'); //menarik data
        $array_data = json_decode($current_data, true);
        foreach ($array_data as $kode);
        if (empty($array_data)) {
            $b = 1;
        } else {
            $a = substr($kode['Kode_rawat'], 4);
            $b = $a + 1;
        }
        if ($b < 10) {
            $kode_rawat = "RJ-00" . $b;
        } else {
            $kode_rawat = "RJ-" . $b;
        }
    } else {
        $kode_rawat = "R-01";
    }

    if (isset($_POST['save'])) {
        if (file_exists('dataRawatJalan.json')) {
            $final_data = Tambah_Data();
            file_put_contents('dataRawatJalan.json', $final_data);
            header("Location: rawatJalan.php");
        } else {
            $final_data = Buat_File();

            file_put_contents('dataRawatJalan.json', $final_data);
            header("Location: rawatJalan.php");
        }
    }

    function Tambah_Data()
    {
        $kode_rawat = $_POST['kode_rawat'];
        $nrm = $_POST['nrm'];
        $nip_dokter = $_POST['nip_dokter'];
        $nama = $_POST['nama'];
        $waktu_kunjungan = $_POST['waktu_kunjungan'];
        $keluhan = $_POST['keluhan'];
        $diagnosa = $_POST['diagnosa'];

        $get_json = file_get_contents('dataRawatJalan.json');
        $array_data = json_decode($get_json, true);
        $peserta = [
            'Kode_rawat' => $kode_rawat,
            'Nrm' => $nrm,
            'Nama' => $nama,
            'Nip_dokter' => $nip_dokter,
            'Waktu_kunjungan' => $waktu_kunjungan,
            'Keluhan' => $keluhan,
            'Diagnosa' => $diagnosa,
        ];
        $array_data[] = $peserta;

        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
        return $final_data;
    }

    function Buat_File()
    {
        $kode_rawat = $_POST['kode_rawat'];
        $nrm = $_POST['nrm'];
        $nama = $_POST['nama'];
        $nip_dokter = $_POST['nip_dokter'];
        $waktu_kunjungan = $_POST['waktu_kunjungan'];
        $keluhan = $_POST['keluhan'];
        $diagnosa = $_POST['diagnosa'];
        $array_data = array();

        $peserta = [
            'Kode_rawat' => $kode_rawat,
            'Nrm' => $nrm,
            'Nama' => $nama,
            'Nip_dokter' => $nip_dokter,
            'Waktu_kunjungan' => $waktu_kunjungan,
            'Keluhan' => $keluhan,
            'Diagnosa' => $diagnosa,
        ];
        $array_data[] = $peserta;

        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
        return $final_data;
    }
    ?>
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
                    <li class="nav-item"><a class="nav-link" href="rawatJalan.php">Rawat Jalan</a></li>
                    <li class="nav-item"><a class="nav-link" href="dokter.php">Dokter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Form Rawat Jalan -->
    <div class="container mt-4">
        <h2 class="text-center mb-4">Form Rawat Jalan</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" class="bg-white p-4 rounded shadow-sm">
                    <div class="mb-3">
                        <label for="kode_rawat" class="form-label">Kode Rawat</label>
                        <input type="text" id="kode_rawat" name="kode_rawat" class="form-control" value="<?= $kode_rawat ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nrm" class="form-label">NRM Pasien</label>
                        <input type="text" id="nrm" name="nrm" class="form-control" value="<?= $nrm ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= $nama ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nip_dokter" class="form-label">Nip Dokter</label>
                        <select name="nip_dokter" id="nip_dokter" class="form-control" required>
                            <option value="">-- Pilih Dokter --</option>
                            <option value="D-01">D-01</option>
                            <option value="D-02">D-02</option>
                            <option value="D-03">D-03</option>
                            <option value="D-04">D-04</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="waktu_kunjungan" class="form-label">Waktu Kunjungan</label>
                        <input type="date" name="waktu_kunjungan" id="waktu_kunjungan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="keluhan" class="form-label">Keluhan</label>
                        <input type="text" name="keluhan" id="keluhan" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="diagnosa" class="form-label">Diagnosa</label>
                        <input type="text" name="diagnosa" id="diagnosa" class="form-control" required>
                    </div>
                    <div class="d-flex justify-content-center gap-2">
                        <button type="submit" name="save" class="btn btn-primary" onclick="return valid()">Simpan</button>
                        <a href="pasien.php" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
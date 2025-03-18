<?php
// include "menubar.php";
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Pasien</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <?php
    $thn = date('Y');
    if (file_exists('data.json')) { //buat memastikan data ada / tidak
        $current_data = file_get_contents('data.json'); //menarik data
        $array_data = json_decode($current_data, true);
        foreach ($array_data as $kode);

        if (empty($array_data)) {
            $b = 1;
        } else {
            $a = substr($kode['Nrm'], 6);
            $b = $a + 1;
        }


        if ($b < 10) {
            $nrm = "MD" . $thn . "00" . $b;
        } elseif ($b > 9 && $b < 100) {
            $nrm = "MD" . $thn . "0" . $b;
        } else {
            $nrm = "MD" . $thn . $b;
        }
    }

    if (isset($_POST['save'])) {
        if (file_exists('data.json')) {
            $final_data = Tambah_Data();
            file_put_contents('data.json', $final_data);
            header("Location: pasien.php");
        } else {
            $final_data = Buat_File();

            file_put_contents('data.json', $final_data);
            header("Location: pasien.php");
        }
    }

    function Tambah_Data()
    {
        $nrm = $_POST['nrm'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $tanggal_daftar = $_POST['tanggal_daftar'];

        $get_json = file_get_contents('data.json');
        $array_data = json_decode($get_json, true);
        $peserta = [
            'Nrm' => $nrm,
            'Nama' => $nama,
            'Gender' => $gender,
            'Tempat_lahir' => $tempat_lahir,
            'Tanggal_lahir' => $tanggal_lahir,
            'No_telp' => $no_telp,
            'Alamat' => $alamat,
            'Tanggal_daftar' => $tanggal_daftar,
        ];
        $array_data[] = $peserta;

        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
        return $final_data;
    }

    function Buat_File()
    {
        $nrm = $_POST['nrm'];
        $nama = $_POST['nama'];
        $gender = $_POST['gender'];
        $tempat_lahir = $_POST['tempat_lahir'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $no_telp = $_POST['no_telp'];
        $alamat = $_POST['alamat'];
        $tanggal_daftar = $_POST['tanggal_daftar'];
        $array_data = array();

        $peserta = [
            'Nrm' => $nrm,
            'Nama' => $nama,
            'Gender' => $gender,
            'Tempat_lahir' => $tempat_lahir,
            'Tanggal_lahir' => $tanggal_lahir,
            'No_telp' => $no_telp,
            'Alamat' => $alamat,
            'Tanggal_daftar' => $tanggal_daftar,
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

    <!-- Form Pasien -->
    <div class="container mt-4">
        <h2 class="text-center mb-4">Form Data Pasien</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" class="bg-white p-4 rounded shadow-sm">
                    <div class="mb-3">
                        <label for="nrm" class="form-label">NRM</label>
                        <input type="text" id="nrm" name="nrm" class="form-control" value="<?= $nrm ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div>
                            <input type="radio" name="gender" value="Laki-laki" required> Laki-laki
                            <input type="radio" name="gender" value="Perempuan" required> Perempuan
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telepon</label>
                        <input type="number" name="no_telp" id="no_telp" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_daftar" class="form-label">Tanggal Daftar</label>
                        <input type="date" name="tanggal_daftar" id="tanggal_daftar" class="form-control" required>
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
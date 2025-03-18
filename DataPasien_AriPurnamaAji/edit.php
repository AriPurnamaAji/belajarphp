<?php
// include "menubar.php";
$nrm = $_GET['Nrm'];
$pasien = "active";
include "function.php";

$pasien = file_get_contents('data.json');
$data = json_decode($pasien, true);

foreach ($data as $x => $edit) {
    if ($edit['Nrm'] === $nrm) {
        $nama = $edit['Nama'];
        $gender = $edit['Gender'];
        $tempat_lahir = $edit['Tempat_lahir'];
        $tanggal_lahir = $edit['Tanggal_lahir'];
        $no_telp = $edit['No_telp'];
        $alamat = $edit['Alamat'];
        $tanggal_daftar = $edit['Tanggal_daftar'];
    }
}
if (isset($_POST['save'])) {
    $final_data = edit_data();
    file_put_contents('data.json', $final_data);
    header("Location: pasien.php");
}

function edit_data()
{
    $nrm = $_POST['nrm'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];
    $tanggal_daftar = $_POST['tanggal_daftar'];

    $current_data = file_get_contents('data.json');
    $array_data = json_decode($current_data, true);

    foreach ($array_data as $x => $edit) {
        if ($edit['Nrm'] === $nrm) {
            $array_data[$x]['Nama'] = $nama;
            $array_data[$x]['Gender'] = $gender;
            $array_data[$x]['Tempat_lahir'] = $tempat_lahir;
            $array_data[$x]['Tanggal_lahir'] = $tanggal_lahir;
            $array_data[$x]['No_telp'] = $no_telp;
            $array_data[$x]['Alamat'] = $alamat;
            $array_data[$x]['Tanggal_daftar'] = $tanggal_daftar;
        }
    }
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    return $final_data;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pasien</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
        <h2 class="text-center mb-4">Edit Data Pasien</h2>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post" class="bg-white p-4 rounded shadow-sm">
                    <div class="mb-3">
                        <label for="nrm" class="form-label">NRM</label>
                        <input type="text" id="nrm" name="nrm" class="form-control" value="<?= $nrm ?>" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control" value="<?= $nama ?>" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div>
                            <input type="radio" name="gender" value="Laki-laki" <?= ($gender === "Laki-laki") ? "checked" : "" ?> required> Laki-laki
                            <input type="radio" name="gender" value="Perempuan" <?= ($gender === "Perempuan") ? "checked" : "" ?> required> Perempuan
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" value="<?= $tempat_lahir ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" value="<?= $tanggal_lahir ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_telp" class="form-label">No. Telepon</label>
                        <input type="number" name="no_telp" id="no_telp" class="form-control" value="<?= $no_telp ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="form-control" value="<?= $alamat ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_daftar" class="form-label">Tanggal Daftar</label>
                        <input type="date" name="tanggal_daftar" id="tanggal_daftar" class="form-control" value="<?= $tanggal_daftar ?>" required>
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
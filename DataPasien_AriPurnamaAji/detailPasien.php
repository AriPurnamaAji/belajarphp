<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pasien</title>
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
        <a href="pasien.php">Pasien</a>
        <a href="rawatJalan.php">Rawat Jalan</a>
        <a href="dokter.php">Dokter</a>
    </nav>

    <br>
    <h2>Detail Pasien</h2>

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
                    $spesialis = $dokter['Spesialisasi'];
                }
            }
        }
        $keluhan = $listdata['Keluhan'];
        $diagnosa = $listdata['Diagnosa'];
    }
    ?>
    <table>
        <tr>
            <td>NRM Pasien</td>
            <td>:</td>
            <td><?= $nrm ?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $nama ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $gender ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?= $tanggal_lahir ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $alamat ?></td>
        </tr>
        <tr>
            <td>No Telepon</td>
            <td>:</td>
            <td><?= $no_telp ?></td>
        </tr>
        <tr>
            <td>Keluhan</td>
            <td>:</td>
            <td><?= $keluhan ?></td>
        </tr>
        <tr>
            <td>Diagnosa</td>
            <td>:</td>
            <td><?= $diagnosa ?></td>
        </tr>
    </table>

    <h2>Detail Dokter</h2>
    <table>
        <tr>
            <td>Dokter</td>
            <td>:</td>
            <td><?= $namaDr ?></td>
        </tr>
        <tr>
            <td>Spesialis</td>
            <td>:</td>
            <td><?= $spesialis ?></td>
        </tr>
    </table>
</body>

</html>
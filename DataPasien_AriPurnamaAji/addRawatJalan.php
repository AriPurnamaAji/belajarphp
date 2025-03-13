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
    <link rel="stylesheet" href="style.css">
    <style>
        /* Styling table */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        table tr td {
            padding: 10px;
        }

        table tr td:first-child {
            font-weight: bold;
            color: #555;
            width: 30%;
        }

        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Responsif */
        @media (max-width: 600px) {
            table tr td {
                display: block;
                width: 100%;
            }

            table tr td:first-child {
                margin-top: 10px;
                font-weight: bold;
            }
        }
    </style>
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

<body>
    <!-- Navbar -->
    <nav>
        <a href="#">Home</a>
        <a href="pasien.php">Pasien</a>
        <a href="rawatJalan.php">Rawat Jalan</a>
        <a href="dokter.php">Dokter</a>
    </nav>

    <!-- Form Rawat Jalan -->
    <div class="container">
        <h2>Form Rawat Jalan</h2>
        <form nama="rawatJalan" action="" method="post" id="rawatJalan">
            <table>
                <tr>
                    <td>Kode Rawat</td>
                    <td><input value="<?= $kode_rawat ?>" type="text" name="kode_rawat" id="kode_rawat" readonly></td>

                </tr>
                <tr>
                    <td>NRM Pasien</td>
                    <td><input value="<?= $nrm ?>" type="text" name="nrm" id="nrm" readonly></td>
                </tr>
                <tr>
                    <td>Nama Pasien</td>
                    <td><input value="<?= $nama ?>" type="text" name="nama" id="nama" readonly></td>
                </tr>
                <tr>
                    <td>NIP Dokter</td>
                    <td>
                        <select name="nip_dokter" id="nip_dokter">
                            <option value="">-- Pilih Dokter --</option>
                            <option value="D-01">D-01</option>
                            <option value="D-02">D-02</option>
                            <option value="D-03">D-03</option>
                            <option value="D-04">D-04</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Waktu Kunjungan</td>
                    <td><input type="date" name="waktu_kunjungan" id="waktu_kunjungan"></td>
                </tr>
                <tr>
                    <td>Keluhan</td>
                    <td><input type="text" name="keluhan" id="keluhan"></td>
                </tr>
                <tr>
                    <td>Diagnosa</td>
                    <td><input type="text" name="diagnosa" id="diagnosa"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button class="buttonOk" type="submit" name="save" onclick="return valid()">Save</button>
                        <button class="buttonClose" type="reset" onclick="location.href='pasien.php'">Close</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>
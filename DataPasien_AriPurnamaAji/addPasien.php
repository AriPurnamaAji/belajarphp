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
    <link rel="stylesheet" href="model.css">
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

    if (file_exists('data.json')) { //buat memastikan data ada / tidak
        $current_data = file_get_contents('data.json'); //menarik data
        $array_data = json_decode($current_data, true);
        foreach ($array_data as $kode);
        // $nik_kode[] = $kode['Nik'];
        if (empty($array_data)) {
            $b = 1;
        } else {
            $a = substr($kode['Nrm'], 3);
            $b = $a + 1;
        }
        // $a = count($nik_kode);
        // $b = $a + 1;
        if ($b < 10) {
            $nrm = "MD-202500" . $b;
        } else {
            $nrm = "MD-" . $b;
        }
    } else {
        $b = 001;
        $tgl = date('Y');
        $nrm = "MD-" . $tgl . $b;
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

<body>
    <!-- Navbar -->
    <nav>
        <a href="#">Home</a>
        <a href="pasien.php">Pasien</a>
        <a href="#">Transaksi</a>
        <a href="#">Logout</a>
    </nav>

    <!-- Form Pegawai -->
    <div class="container">
        <h2>Form Data Pasien</h2>
        <form nama="pasien" action="" method="post">
            <table>
                <tr>
                    <td>No. Rekam Medis</td>
                    <td><input value="<?= $nrm ?>" type="text" name="nrm" id="nrm" readonly></td>

                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select name="gender" id="gender">
                            <option value="">-- Pilih Gender --</option>
                            <?php
                            if (file_exists('gender.json')) {
                                $current_data = file_get_contents('gender.json');
                                $array_data = json_decode($current_data, true);

                                foreach ($array_data as $listdata) {
                            ?>
                                    <option value="<?= $listdata['Jenis_Kelamin'] ?>"><?= $listdata['Jenis_Kelamin'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" id="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir" id="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td><input type="number" name="no_telp" id="no_telp"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <td>Tanggal Daftar</td>
                    <td><input type="date" name="tanggal_daftar" id="tanggal_daftar"></td>
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
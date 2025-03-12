<?php
// include "menubar.php";
include "function.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Karyawan</title>
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
            $a = substr($kode['Nik'], 3);
            $b = $a + 1;
        }
        // $a = count($nik_kode);
        // $b = $a + 1;
        if ($b < 10) {
            $nik = "KR-0" . $b;
        } else {
            $nik = "KR-" . $b;
        }
    } else {
        $b = 1;
        $nik = "KR-0" . $b;
    }

    if (isset($_POST['save'])) {
        if (file_exists('data.json')) {
            $final_data = Tambah_Data();
            file_put_contents('data.json', $final_data);
            header("Location: karyawan.php");
        } else {
            $final_data = Buat_File();

            file_put_contents('data.json', $final_data);
            header("Location: karyawan.php");
        }
    }

    function Tambah_Data()
    {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $gapok = $_POST['gapok'];
        $tunjab = $_POST['tunjab'];
        $status = $_POST['status'];
        $anak = $_POST['anak'];
        $tunak = $_POST['tunak'];

        $get_json = file_get_contents('data.json');
        $array_data = json_decode($get_json, true);
        $peserta = [
            'Nik' => $nik,
            'Nama' => $nama,
            'Jabatan' => $jabatan,
            'Gaji_Pokok' => $gapok,
            'Tunjangan' => $tunjab,
            'Status' => $status,
            'Anak' => $anak,
            'Tunj_Anak' => $tunak,
        ];
        $array_data[] = $peserta;

        $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
        return $final_data;
    }

    function Buat_File()
    {
        $nik = $_POST['nik'];
        $nama = $_POST['nama'];
        $jabatan = $_POST['jabatan'];
        $gapok = $_POST['gapok'];
        $tunjab = $_POST['tunjab'];
        $status = $_POST['status'];
        $anak = $_POST['anak'];
        $tunak = $_POST['tunak'];
        $array_data = array();

        $peserta = [
            'Nik' => $nik,
            'Nama' => $nama,
            'Jabatan' => $jabatan,
            'Gaji_Pokok' => $gapok,
            'Tunjangan' => $tunjab,
            'Status' => $status,
            'Anak' => $anak,
            'Tunj_Anak' => $tunak,
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
        <a href="karyawan.php">Karyawan</a>
        <a href="#">Transaksi</a>
        <a href="#">Logout</a>
    </nav>

    <!-- Form Pegawai -->
    <div class="container">
        <h2>Add Data Karyawan</h2>
        <form nama="karyawan" action="" method="post">
            <table>
                <tr>
                    <td>NIK Karyawan</td>
                    <td><input value="<?= $nik ?>" type="text" name="nik" id="nik" readonly></td>

                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>
                        <select name="jabatan" id="jabatan" onchange="pilih_jabatan()">
                            <option value="">-- Pilih Jabatan --</option>
                            <?php
                            if (file_exists('jabatan.json')) {
                                $current_data = file_get_contents('jabatan.json');
                                $array_data = json_decode($current_data, true);

                                foreach ($array_data as $listdata) {
                            ?>
                                    <option value="<?= $listdata['Nama_Jabatan'] ?>"><?= $listdata['Nama_Jabatan'] ?></option>
                            <?php
                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td><input type="text" name="gapok" id="gapok" readonly></td>
                </tr>
                <tr>
                    <td>Tunjangan Jabatan</td>
                    <td><input type="text" name="tunjab" id="tunjab" readonly></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select name="status" id="status" onchange="pilih_status()">
                            <option value="" readonly>-- Pilih Status --</option>
                            <option value="Kawin">Kawin</option>
                            <option value="Belum Kawin">Belum Kawin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Anak</td>
                    <td><input onkeyup="tunj_anak()" type="hidden" name="anak" id="anak"></td>
                </tr>
                <tr>
                    <td>Tunjangan Anak</td>
                    <td><input type="hidden" name="tunak" id="tunak" readonly></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button class="buttonOk" type="submit" name="save" onclick="return valid()">Save</button>
                        <button class="buttonClose" type="reset" onclick="location.href='karyawan.php'">Close</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>
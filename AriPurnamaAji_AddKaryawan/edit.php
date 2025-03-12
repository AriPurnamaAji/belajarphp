<?php
// include "menubar.php";
$nik = $_GET['Nik'];
$karyawan = "active";
include "function.php";

$karyawan = file_get_contents('data.json');
$data = json_decode($karyawan, true);

foreach ($data as $x => $edit) {
    if ($edit['Nik'] === $nik) {
        $nama = $edit['Nama'];
        $jabatan = $edit['Jabatan'];
        $gapok = $edit['Gaji_Pokok'];
        $tunjab = $edit['Tunjangan'];
        $status = $edit['Status'];
        $anak = $edit['Anak'];
        $tunak = $edit['Tunj_Anak'];
    }
}
if (isset($_POST['save'])) {
    $final_data = edit_data();
    file_put_contents('data.json', $final_data);
    header("Location: karyawan.php");
}

function edit_data()
{
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $gapok = $_POST['gapok'];
    $tunjab = $_POST['tunjab'];
    $status = $_POST['status'];
    $anak = $_POST['anak'];
    $tunak = $_POST['tunak'];

    $current_data = file_get_contents('data.json');
    $array_data = json_decode($current_data, true);

    foreach ($array_data as $x => $edit) {
        if ($edit['Nik'] === $nik) {
            $array_data[$x]['Nama'] = $nama;
            $array_data[$x]['Jabatan'] = $jabatan;
            $array_data[$x]['Gaji_Pokok'] = $gapok;
            $array_data[$x]['Tunjangan'] = $tunjab;
            $array_data[$x]['Status'] = $status;
            $array_data[$x]['Anak'] = $anak;
            $array_data[$x]['Tunj_Anak'] = $tunak;
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
        <h2>Edit Data Karyawan</h2>
        <form nama="karyawan" action="" method="post">
            <table>
                <tr>
                    <td>NIK Karyawan</td>
                    <td><input value="<?= $nik ?>" type="text" name="nik" id="nik" readonly></td>

                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input value="<?= $nama ?>" type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>
                        <select value="<?= $jabatan ?>" name="jabatan" id="jabatan" onchange="pilih_jabatan()">
                            <option value="">-- Pilih Jabatan --</option>
                            <?php
                            if (file_exists('jabatan.json')) {
                                $current_data = file_get_contents('jabatan.json');
                                $array_data = json_decode($current_data, true);

                                foreach ($array_data as $listdata) {
                            ?>
                                    <option
                                        <?php
                                        if ($listdata['Nama_Jabatan'] == $jabatan) {
                                            echo "selected";
                                        }
                                        ?>
                                        value="<?= $listdata['Nama_Jabatan'] ?>"><?= $listdata['Nama_Jabatan'] ?></option>
                            <?php

                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gaji Pokok</td>
                    <td><input value="<?= $gapok ?>" type="text" name="gapok" id="gapok" readonly></td>
                </tr>
                <tr>
                    <td>Tunjangan Jabatan</td>
                    <td><input value="<?= $tunjab ?>" type="text" name="tunjab" id="tunjab" readonly></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select value="<?= $status ?>" name="status" id="status" onchange="pilih_status()">
                            <option value="" readonly>-- Pilih Status --</option>
                            <option <?php if ($status == "Kawin") {
                                        echo "selected";
                                    } ?> value="Kawin">Kawin</option>
                            <option <?php if ($status == "Belum Kawin") {
                                        echo "selected";
                                    } ?> value="Belum Kawin">Belum Kawin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Jumlah Anak</td>
                    <td><input type="<?php if ($status == "Kawin") {
                                            echo "text";
                                        } else {
                                            echo "hidden";
                                        } ?>" value="<?= $anak ?>" onkeyup="tunj_anak()" type="hidden" name="anak" id="anak"></td>
                </tr>
                <tr>
                    <td>Tunjangan Anak</td>
                    <td><input type="<?php if ($status == "Kawin") {
                                            echo "text";
                                        } else {
                                            echo "hidden";
                                        } ?>" value="<?= $tunak ?>" type="hidden" name="tunak" id="tunak" readonly></td>
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
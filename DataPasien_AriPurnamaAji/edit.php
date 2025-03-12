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
        <a href="pasien.php">Pasien</a>
        <a href="#">Transaksi</a>
        <a href="#">Logout</a>
    </nav>

    <!-- Form Pegawai -->
    <div class="container">
        <h2>Edit Data Pasien</h2>
        <form nama="pasien" action="" method="post">
            <table>
                <tr>
                    <td>No. Rekam Medis</td>
                    <td><input value="<?= $nrm ?>" type="text" name="nrm" id="nrm" readonly></td>

                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input value="<?= $nama ?>" type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>
                        <select value="<?= $gender ?>" name="gender" id="gender">
                            <option value="">-- Pilih Gender --</option>
                            <?php
                            if (file_exists('gender.json')) {
                                $current_data = file_get_contents('gender.json');
                                $array_data = json_decode($current_data, true);

                                foreach ($array_data as $listdata) {
                            ?>
                                    <option
                                        <?php
                                        if ($listdata['Jenis_Kelamin'] == $gender) {
                                            echo "selected";
                                        }
                                        ?>
                                        value="<?= $listdata['Jenis_Kelamin'] ?>"><?= $listdata['Jenis_Kelamin'] ?></option>
                            <?php

                                }
                            }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input value="<?= $tempat_lahir ?>" type="text" name="tempat_lahir" id="tempat_lahir"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input value="<?= $tanggal_lahir ?>" type="date" name="tanggal_lahir" id="tanggal_lahir"></td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td><input value="<?= $no_telp ?>" type="number" name="no_telp" id="no_telp"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input value="<?= $alamat ?>" type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <td>Tanggal Daftar</td>
                    <td><input value="<?= $tanggal_daftar ?>" type="date" name="tanggal_daftar" id="tanggal_daftar"></td>
                </tr>
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
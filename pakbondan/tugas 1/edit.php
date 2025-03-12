<?php
$nrm = $_GET['nrm'];
$pasien = file_get_contents('data.json');
$data = json_decode($pasien, true);
foreach ($data as $x => $edit) {
    if ($edit['nrm'] === $nrm) {
        $nama = $edit['nama'];
        $jenis_kelamin = $edit['jenis_kelamin'];
        $tempat_lahir = $edit['tempat_lahir'];
        $tanggal_lahir = $edit['tanggal_lahir'];
        $no_tlp = $edit['no_tlp'];
        $alamat = $edit['alamat'];
        $tgl_daftar = $edit['tgl_daftar'];
    }
}

if (isset($_POST['save'])) {
    if (file_exists('data.json')) {
        $final = edit_data();
        file_put_contents('data.json', $final);
        header('Location: pasien.php');
    }
}

function edit_data()
{
    $nrm = $_POST['nrm'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_tlp = $_POST['no_tlp'];
    $alamat = $_POST['alamat'];
    $tgl_daftar = $_POST['tgl_daftar'];

    $current_data = file_get_contents('data.json');
    $array_data = json_decode($current_data, true);
    foreach ($array_data as $x => $edit) {
        if ($edit['nrm'] === $nrm) {
            $array_data[$x]['nama'] = $nama;
            $array_data[$x]['jenis_kelamin'] = $jenis_kelamin;
            $array_data[$x]['tempat_lahir'] = $tempat_lahir;
            $array_data[$x]['tanggal_lahir'] = $tanggal_lahir;
            $array_data[$x]['no_tlp'] = $no_tlp;
            $array_data[$x]['alamat'] = $alamat;
            $array_data[$x]['tgl_daftar'] = $tgl_daftar;
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
    <title>Edit Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="">HOME</a>
        <a href="pasien.php">PASIEN</a>
        <a href="">RAWAT JALAN</a>
        <a href="">DOKTER</a>
    </nav>
    <h1>EDIT PASIEN</h1>
    <form action="" method="post" id="formpasien">
        <label for="nrm">NRM</label><br>
        <input type="text" id="nrm" name="nrm" value="<?= $nrm ?>" readonly><br><br>
        <label for="nama">Nama</label><br>
        <input type="text" id="nama" name="nama" value="<?= $nama ?>"><br><br>
        <label for="jenis_kelamin">Jenis Kelamin</label><br>
        <label class="custom-radio" for="jenis_kelamin">
            <input type="radio" name="jenis_kelamin" value="Laki-laki" <?php if ($jenis_kelamin == 'Laki-laki') echo 'checked' ?>>
            <input type="radio" name="jenis_kelamin" value="Laki-laki">
            <span class="checkmark"></span> Laki-laki
        </label>

        <label class="custom-radio" for="jenis_kelamin">
            <input type="radio" name="jenis_kelamin" value="Perempuan" <?php if ($jenis_kelamin == 'Perempuan') echo 'checked' ?>>
            <input type="radio" name="jenis_kelamin" value="Perempuan">
            <span class="checkmark"></span> Perempuan
        </label>
        <br><br>
        <label for="tempat_lahir">Tempat Lahir</label><br>
        <input type="text" name="tempat_lahir" id="tempat_lahir" value="<?= $tempat_lahir ?>"><br><br>
        <label for="tanggal_lahir">Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="<?= $tanggal_lahir ?>"><br><br>
        <label for="no_tlp">No.Telepon</label><br>
        <input type="number" name="no_tlp" id="no_tlp" value="<?= $no_tlp ?>"><br><br>
        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat" value="<?= $alamat ?>"><br><br>
        <label for="tgl_daftar">Tanggal Daftar</label><br>
        <input type="date" name="tgl_daftar" id="tgl_daftar" value="<?= $tgl_daftar ?>">
        <input type="submit" name="save" onclick="">
        <input type="button" value="Cancel" onclick="location.href='pasien.php'">

    </form>
</body>

</html>
<?php
if (isset($_POST['save'])) {
    if (file_exists('data.json')) {
        $final = tambah_data();
        file_put_contents('data.json', $final);
        header('Location: pasien.php');
    } else {
        $final = buat_file();
        file_put_contents('data.json', $final);
        header('Location: pasien.php');
    }
}

function tambah_data()
// DETAIL DALAM NGODING MAS
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
    $pasien = [
        'nrm' => $nrm,
        'nama' => $nama,
        'jenis_kelamin' => $jenis_kelamin,
        'tempat_lahir' => $tempat_lahir,
        'tanggal_lahir' => $tanggal_lahir,
        'no_tlp' => $no_tlp,
        'alamat' => $alamat,
        'tgl_daftar' => $tgl_daftar

    ];
    $array_data[] = $pasien;
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    return $final_data;
}
function buat_file()
{
    $nrm = $_POST['nrm'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $no_tlp = $_POST['no_tlp'];
    $alamat = $_POST['alamat'];
    $tgl_daftar = $_POST['tgl_daftar'];


    $array_data = array();

    $pasien = [
        'nrm' => $nrm,
        'nama' => $nama,
        'jenis_kelamin' => $jenis_kelamin,
        'tempat_lahir' => $tempat_lahir,
        'tanggal_lahir' => $tanggal_lahir,
        'no_tlp' => $no_tlp,
        'alamat' => $alamat,
        'tgl_daftar' => $tgl_daftar

    ];
    $array_data[] = $pasien;
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    return $final_data;
}
$thn = date('Y');
if (file_exists('data.json')) {
    $current_data = file_get_contents('data.json');
    $array_data = json_decode($current_data, true);
    foreach ($array_data as $listdata);

    if (empty($array_data)) {
        $b = 1;
    } else {
        $a = substr($listdata['nrm'], 6);
        $b = $a + 1;
    }


    if ($b < 10) {
        $nrm = "MD" .$thn."00". $b;
    } elseif ($b > 9 && $b < 100) {
        $nrm = "MD" .$thn."0". $b;
    } else {
        $nrm = "MD" .$thn. $b;
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="">HOME</a>
        <a href="pasien.php">PASIEN</a>
        <a href="">RAWAT JALAN</a>
        <a href="">DOKTER</a>
    </nav>
    <h1>TAMBAH PASIEN</h1>
    <form action="" method="post" id="formpasien">
        <label for="nrm">NRM</label><br>
        <input type="text" id="nrm" name="nrm" value="<?= $nrm ?>" readonly><br><br>
        <label for="nama">Nama</label><br>
        <input type="text" id="nama" name="nama"><br><br>
        <label for="jenis_kelamin">Jenis Kelamin</label><br>
        <label class="custom-radio">
            <input type="radio" name="jenis_kelamin" value="Laki-laki">
            <span class="checkmark"></span> Laki-laki
        </label>

        <label class="custom-radio">
            <input type="radio" name="jenis_kelamin" value="Perempuan">
            <span class="checkmark"></span> Perempuan
        </label>
        <br><br>
        <label for="tempat_lahir">Tempat Lahir</label><br>
        <input type="text" name="tempat_lahir" id="tempat_lahir"><br><br>
        <label for="tanggal_lahir">Tanggal Lahir</label><br>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir"><br><br>
        <label for="no_tlp">No.Telepon</label><br>
        <input type="number" name="no_tlp" id="no_tlp"><br><br>
        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat" id="alamat"><br><br>
        <label for="tgl_daftar">Tanggal Daftar</label><br>
        <input type="date" name="tgl_daftar" id="tgl_daftar">
        <input type="submit" name="save" onclick="">
        <input type="button" value="Cancel" onclick="location.href='pasien.php'">

    </form>
</body>

</html>
<?php
if (isset($_POST['save'])) {
    if (file_exists('rawat.json')) {
        $final = tambah_data();
        file_put_contents('rawat.json', $final);
        header('Location: rawat.php');
    } else {
        $final = buat_file();
        file_put_contents('rawat.json', $final);
        header('Location: rawat.php');
    }
}

function tambah_data()
{
    $kode_rawat = $_POST['kode_rawat'];
    $nrm = $_POST['nrm'];
    $dokter_nip = $_POST['dokter_nip'];
    $tgl_periksa = $_POST['tgl_periksa'];
    $keluhan = $_POST['keluhan'];
    $diagnosa = $_POST['diagnosa'];

    $current_data = file_get_contents('rawat.json');
    $array_data = json_decode($current_data, true);
    $rawat = [
        'kode_rawat' => $kode_rawat,
        'nrm' => $nrm,
        'dokter_nip' => $dokter_nip,
        'tgl_periksa' => $tgl_periksa,
        'keluhan' => $keluhan,
        'diagnosa' => $diagnosa,
    ];
    $array_data[] = $rawat;
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    return $final_data;
}

function buat_file()
{
    $kode_rawat = $_POST['kode_rawat'];
    $nrm = $_POST['nrm'];
    $dokter_nip = $_POST['dokter_nip'];
    $tgl_periksa = $_POST['tgl_periksa'];
    $keluhan = $_POST['keluhan'];
    $diagnosa = $_POST['diagnosa'];

    $array_data = array();

    $rawat = [
        'kode_rawat' => $kode_rawat,
        'nrm' => $nrm,
        'dokter_nip' => $dokter_nip,
        'tgl_periksa' => $tgl_periksa,
        'keluhan' => $keluhan,
        'diagnosa' => $diagnosa,
    ];
    $array_data[] = $rawat;
    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    return $final_data;
}

if (file_exists('rawat.json')) {
    $current_data = file_get_contents('rawat.json');
    $array_data = json_decode($current_data, true);
    foreach ($array_data as $listdata);

    if (empty($array_data)) {
        $b = 1;
    } else {
        $a = substr($listdata['kode_rawat'], 3);
        $b = $a + 1;
    }

    if ($b < 10) {
        $kode_rawat = "R-0" . $b;
    } else {
        $kode_rawat = "R-" . $b;
    }
} else {
    $kode_rawat = "R-01";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Rawat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="">HOME</a>
        <a href="pasien.php">PASIEN</a>
        <a href="">RAWAT</a>
        <a href="">DOKTER</a>
    </nav>
    <h1>FORM RAWAT JALAN</h1>
    <form action="" method="post" id="formrawat">
        <label for="kode_rawat">Kode Rawat</label><br>
        <input type="text" id="kode_rawat" name="kode_rawat" value="<?= $kode_rawat ?>" readonly><br><br>
        <label for="nrm">NRM</label><br>
        <input type="text" id="nrm" name="nrm" value=""><br><br>
        <label for="dokter_nip">NIP Dokter</label><br>
        <select name="dokter_nip" id="dokter_nip">
            <option value="D-01">D-01</option>
            <option value="D-02">D-02</option>
            <option value="D-03">D-03</option>
            <option value="D-04">D-04</option>
        </select>
        <label for="tgl_periksa">Tanggal Periksa</label><br>
        <input type="date" id="tgl_periksa" name="tgl_periksa"><br><br>
        <label for="keluhan">Keluhan</label><br>
        <input type="text" id="keluhan" name="keluhan"><br><br>
        <label for="diagnosa">Diagnosa</label><br>
        <input type="text" id="diagnosa" name="diagnosa"><br><br>
        <br>
        <input type="submit" name="save" onclick="">
        <input type="button" value="Cancel" onclick="location.href='rawat.php'">
    </form>
</body>

</html>
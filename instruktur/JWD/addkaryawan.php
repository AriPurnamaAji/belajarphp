<?php
// $karyawan="active";
include "menubar.php";
include "function.php";

if (isset($_POST['save'])) {
    if (file_exists('db/data.json')) {
        $final_data = Tambah_Data();
        file_put_contents('db/data.json', $final_data);
        header("Location: addkaryawan.php");
    } else {
        $final_data = Buat_File();

        file_put_contents('db/data.json', $final_data);
        header("Location: addkaryawan.php");
    }
}

?>

<?php
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if (file_exists('db/data.json')) {
//         $final_data = Tambah_Data();
//         file_put_contents('db/data.json', $final_data);
//         header("Location: List_data.php");
//     } else {
//         $final_data = Buat_File();

//         file_put_contents('db/data.json', $final_data);
//         header("Location: List_data.php");
//     }
// }

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

    $get_json = file_get_contents('db/data.json');
    $array_data = json_decode($get_json, true);
    $peserta = [
        'Nik' => $nik,
        'Nama' => $nama,
        'Jabatan' => $jabatan,
        'Gaji_Pokok' => $gapok,
        'Tunjangan' => $tunjab,
        'Status' => $status,
        'Anak' => $anak,
        'Tunj_anak' => $tunak,
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
        'Tunj_anak' => $tunak,
    ];
    $array_data[] = $peserta;

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
    <?php
    if (file_exists('db/data.json')) {
        $current_data = file_get_contents('db/data.json');
        $array_data = json_decode($current_data, true);
        foreach ($array_data as $kode_ku) {
            $KODE[] = $kode_ku['Nik'];
        }
        $a = count($KODE);
        $b = $a + 1;
        if ($b < 10) {
            $nik = "KR-0" . $b;
        } else {
            $nik = "KR-" . $b;
        }
    } else {
        $b = 1;
        $nik = "KR-0" . $b;
    }
    ?>
</head>

<body>
    <div class="centered" style="width:400px">
        <h3 class="judul">Add Karyawan</h3>
        <form action="" method="post">
            <label for="">NIK Karyawan</label>
            <input value="<?= $nik ?>" type="text" name="nik" id="nik" readonly>
            <label for="">Nama</label>
            <input type="text" name="nama" id="nama" required>
            <label for="">Jabatan</label>
            <select name="jabatan" id="jabatan" onchange="pilih_jabatan()" required>
                <option value="">--Pilih Jabatan--</option>
                <?php
                if (file_exists('db/data.json')) {
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
            <label for="">Gaji Pokok</label>
            <input type="text" name="gapok" id="gapok" readonly>
            <label for="">Tunjangan Jabatan</label>
            <input type="text" name="tunjab" id="tunjab" readonly>
            <label for="">Status</label>
            <select name="status" id="status" onchange="pilih_status()" required>
                <option value="">--Pilih Status--</option>
                <option value="Kawin">Kawin</option>
                <option value="Belum Kawin">Belum Kawin</option>
            </select>
            <label for="">Jumlah Anak</label>
            <input onkeyup="tunj_anak()" type="hidden" name="anak" id="anak">
            <label for="">Tunjangan Anak</label>
            <input type="hidden" name="tunak" id="tunak" readonly>
            <br>
            <button class="buttonOk" type="submit" name="save">Save</button>
            <button class="button2" type="reset" onclick="location.href='karyawan.php'">Close</button>


        </form>
    </div>
</body>

</html>
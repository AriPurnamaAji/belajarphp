<?php
include('layouts/header.php');
?>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (file_exists('db/data.json')) {
        $final_data = Tambah_Data();
        file_put_contents('db/data.json', $final_data);
        header("Location: List_data.php");
    } else {
        $final_data = Buat_File();

        file_put_contents('db/data.json', $final_data);
        header("Location: List_data.php");
    }
}

function Tambah_Data()
{
    $no = $_POST['fNo'];
    $nama = $_POST['fNama'];
    $pekerjaan = $_POST['fPekerjaan'];
    $alamat = $_POST['fAlamat'];

    $get_json = file_get_contents('db/data.json');
    $array_data = json_decode($get_json, true);

    $peserta = [
        'No' => $no,
        'Nama' => $nama,
        'Pekerjaan' => $pekerjaan,
        'Alamat' => $alamat,
    ];

    $array_data[] = $peserta;

    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    return $final_data;
}

function Buat_File()
{
    $no = $_POST['fNo'];
    $nama = $_POST['fNama'];
    $pekerjaan = $_POST['fPekerjaan'];
    $alamat = $_POST['fAlamat'];
    $array_data = array();

    $peserta = [
        'No' => $no,
        'Nama' => $nama,
        'Pekerjaan' => $pekerjaan,
        'Alamat' => $alamat,
    ];
    $array_data[] = $peserta;

    $final_data = json_encode($array_data, JSON_PRETTY_PRINT);
    return $final_data;
}
?>
<title>Form Input Peserta</title>
<?php
if (file_exists('db/data.json')) {
    $current_data = file_get_contents('db/data.json');
    $array_data = json_decode($current_data, true);
    foreach ($array_data as $kode_ku) {
        $KODE[] = $kode_ku['No'];
    }
    $a = max($KODE);
    $b = $a + 1;
} else {
    $b = 1;
}
?>
<div class="mx-auto py-4">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h5>
                    <a href="index.php" class="text-decoration-none text-blue"> <u>Form input</u> </a> |
                    <a href="List_data.php" class="text-decoration-none text-warning"> Data Peserta </a>
                </h5>
            </div>
            <div class="card-body">
                <div class="mx-auto col-md-8">
                    <div class="text-center h5"><u>Form Input</u></div>
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <div class="form-group row my-3">
                            <label for="" class="col-sm-2 col-form-label">Nama :</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="fNo" id="" class="form-control" placeholder="" value="<?php echo $b; ?>">
                                <input type="text" name="fNama" id="" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <label for="" class="col-sm-2 col-form-label">Pekerjaan :</label>
                            <div class="col-sm-10">
                                <input type="text" name="fPekerjaan" id="" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="form-group row my-3">
                            <label for="" class="col-sm-2 col-form-label">Alamat :</label>
                            <div class="col-sm-10">
                                <input type="text" name="fAlamat" id="" class="form-control" placeholder="" required>
                                <button class="btn btn-dark mt-3" type="submit">Simpan</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include('layouts/footer.php');
?>
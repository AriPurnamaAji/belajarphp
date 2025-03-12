<?php
$peserta = [[
    "nomor" => "No.",
    "nama" => "Nama Peserta",
    "gender" => "Jenis Kelamin",
    "nilai" => "Nilai Peserta",
    "keterangan" => "Keterangan"
]];

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $nilai = $_POST['nilai'];
    $keterangan = $_POST['keterangan'];

$newpeserta = [
    "nomor" => $nomor,
    "nama" => $nama,
    "gender" => $gender,
    "nilai" => $nilai,
    "keterangan" => $keterangan
];
array_push($peserta, $newpeserta);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>
    <?php
        foreach ($peserta as $datapeserta):
    ?>
    <table>
        <tr>
            <td><?php echo $datapeserta["nomor"]?></td>
            <td><?php echo $datapeserta["nama"]?></td>
            <td><?php echo $datapeserta["gender"]?></td>
            <td><?php echo $datapeserta["nilai"]?></td>
            <td><?php echo $datapeserta["keterangan"]?></td>
        </tr>
    </table>
    <?php endforeach; ?>
</body>
</html>
<?php
$peserta = [[
    "Nama" => "Peserta 1",
    "Nilai" => "80"
],
[
    "Nama" => "Peserta 2",
    "Nilai" => "70"
]];

if ($_SERVER['REQUEST_METHOD']==='POST'){
    $nama = $_POST['nama'];
    $nilai = $_POST['nilai'];

$newpeserta = [
    "Nama" => $nama,
    "Nilai" => $nilai
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
    <table>
    <?php foreach ($peserta as $datapeserta){?>
        <tr>
            <td><?php echo $datapeserta["Nama"]?></td>
            <td><?php echo $datapeserta["Nilai"]?></td>
        </tr>
        <?php } ?>
    </table>
    <a href="inputarrayassoc.php">Tambah</a>
</body>
</html>
<?php

$dataFile = 'data.csv';

// Fungsi untuk membaca data dari file CSV
function loadData($file) {
    $data = [];
    if (file_exists($file)) {
        $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        if (!empty($lines)) {
            $header = str_getcsv(array_shift($lines)); // Ambil header
            foreach ($lines as $line) {
                $row = str_getcsv($line);
                $data[] = array_combine($header, $row);
            }
        }
    }
    return $data;
}

// Fungsi untuk menyimpan data ke file CSV
function saveData($file, $data) {
    $fp = fopen($file, 'w');
    if (!empty($data)) {
        fputcsv($fp, array_keys($data[0])); // Tulis header
        foreach ($data as $row) {
            fputcsv($fp, $row);
        }
    }
    fclose($fp);
}
// Memuat data dari file
$peserta = loadData($dataFile);

// Memproses data dari inputarrayassoc.php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $no = isset($_POST['No']) ? $_POST['No'] : null;
    $nama = isset($_POST['Nama']) ? $_POST['Nama'] : null;
    $kelamin = isset($_POST['Kelamin']) ? $_POST['Kelamin'] : null;
    $nilai = isset($_POST['Nilai']) ? $_POST['Nilai'] : null;

    // Validasi input
    if ($no !== null && $nama !== null && $kelamin !== null && $nilai !== null) {
        // Periksa apakah data sudah ada
        $dataSudahAda = false;
        foreach ($peserta as $data) {
            if ($data['Nama Peserta'] === $nama && $data['Nilai'] === $nilai) {
                $dataSudahAda = true;
                break;
            }
        }

        // Tambahkan data jika belum ada
        if (!$dataSudahAda) {
            $peserta[] = [
                "No" => $no,
                "Nama Peserta" => $nama,
                "Jenis Kelamin" => $kelamin,
                "Nilai" => $nilai,
                "Keterangan" => ($nilai >= 71) ? "Lulus" : (($nilai >= 50) ? "Tidak Lulus" : "Drop Out")
            ];

            // Menyimpan data ke file
            saveData($dataFile, $peserta);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Peserta</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Data Peserta</h1>
    <?php if (!empty($peserta)): ?>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th>Jenis Kelamin</th>
                <th>Nilai</th>
                <th>Keterangan</th>
            </tr>
            <?php foreach ($peserta as $data): ?>
                <tr>
                    <td><?php echo $data["No"]; ?></td>
                    <td><?php echo $data["Nama Peserta"]; ?></td>
                    <td><?php echo $data["Jenis Kelamin"]; ?></td>
                    <td><?php echo $data["Nilai"]; ?></td>
                    <td><?php echo $data["Keterangan"]; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php else: ?>
        <p>Tidak ada data peserta.</p>
    <?php endif; ?>
</body>
</html>
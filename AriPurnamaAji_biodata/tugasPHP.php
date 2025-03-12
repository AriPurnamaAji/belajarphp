<?php
// Inisialisasi array peserta dengan header tabel
$peserta = [
    [
        "Nama" => "<a href='sulthon.php'>Muhammad Alief Sulton Zuhri</a>",
        "Gender" => "Laki-laki",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='nadhira.php'>Nadhira Anysa Kurniawan</a>",
        "Gender" => "Perempuan",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='dyah.php'>Dyah Kursumawardani</a>",
        "Gender" => "Perempuan",
        "Nilai" => "88",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='odi.php'>Muhammad Odi Hafidz Setiawan</a>",
        "Gender" => "Laki-laki",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='kukuh.php'>Kukuh Ari Prianto</a>",
        "Gender" => "Laki-laki",
        "Nilai" => "67",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='ardien.php'>Linear Addien</a>",
        "Gender" => "Laki-laki",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='santa.php'>Santa Patria Ika</a>",
        "Gender" => "Perempuan",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='ari.php'>Ari Purnama Aji</a>",
        "Gender" => "Laki-laki",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='fira.php'>Shafira Putri Maharani</a>",
        "Gender" => "Perempuan",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='yura.php'>Ayura Safa Chintami</a>",
        "Gender" => "Perempuan",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='anggi.php'>Anggi Oktavia Ramadani</a>",
        "Gender" => "Perempuan",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='azis.php'>Muhammad Azis Hakiki</a>",
        "Gender" => "Laki-laki",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='syahrul.php'>Syahrul Gunawan</a>",
        "Gender" => "Laki-laki",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='imam.php'>Muhammad Imam Suryaman</a>",
        "Gender" => "Laki-laki",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='dwi.php'>Dwi Rachmawaty</a>",
        "Gender" => "Perempuan",
        "Nilai" => "90",
        "Keterangan" => "Lulus",
    ],
    [
        "Nama" => "<a href='hafizh.php'>Hafizh Ainaya Istanto</a>",
        "Gender" => "Laki-laki",
        "Nilai" => "45",
        "Keterangan" => "Lulus",
    ]
];

// Cek apakah form dikirim menggunakan metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $nama = htmlspecialchars($_POST['nama']); // Bersihkan input untuk menghindari XSS
    $gender = htmlspecialchars($_POST['gender']);
    $nilai = intval($_POST['nilai']); // Konversi nilai ke integer

    // Validasi input
    if (!empty($nama) && !empty($gender) && is_numeric($nilai) && $nilai >= 0 && $nilai <= 100) {
        // Hitung keterangan berdasarkan nilai
        if ($nilai >= 71) {
            $keterangan = "Lulus";
        } else if ($nilai >= 50) {
            $keterangan = "Tidak Lulus";
        } else {
            $keterangan = "Drop Out";
        }

        // Tambahkan peserta baru ke array
        $newpeserta = [
            "Nama" => $nama, // Tambahkan link jika diperlukan
            "Gender" => $gender,
            "Nilai" => $nilai,
            "Keterangan" => $keterangan
        ];
        array_push($peserta, $newpeserta);
    } else {
        echo "<p style='color: red;'>Semua field harus diisi, dan nilai harus angka antara 0 dan 100!</p>";
    }
}

echo "<h3 align=center>Daftar Nilai Peserta</h3>";
echo "<h3 align=center>Junior Web Developer NB 2</h3>";
echo "<h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peserta</title>
    <style>
        body {
            text-align:center;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <br><br>
    <table align="center">
        <tr>
            <th>No.</th>
            <th>Nama Peserta</th>
            <th>Jenis Kelamin</th>
            <th>Nilai Peserta</th>
            <th>Keterangan</th>
        </tr>
        <?php foreach ($peserta as $index => $datapeserta): ?>
            <tr>
                <td style="text-align: center;"><?php echo $index + 1 .  "."; ?></td>
                <td><a href="<?php echo ($datapeserta["Nama"]);?>.php"><?php echo ($datapeserta["Nama"]); ?></a> </td>
                <td><?php echo $datapeserta["Gender"]; ?></td>
                <td style="text-align: center;"><?php echo $datapeserta["Nilai"]; ?></td>
                <td>
                    <?php 
                    if ($datapeserta["Nilai"] >= 71) {
                        $keterangan = "Lulus";
                    } else if ($datapeserta["Nilai"] >= 50) {
                        $keterangan = "Tidak lulus";
                    } else {
                        $keterangan = "Drop out";
                    }
                    echo $keterangan
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <br><br>
    <button><a href="tugasPHPinput.php">Tambah</a></button>
</body>
</html>
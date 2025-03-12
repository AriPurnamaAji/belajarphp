<?php
//array asosiatif

    // Cek apakah form dikirim menggunakan metode POST
    if ($_SERVER['REQUEST_METHOD']==='POST'){
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];
        $kelamin = $_POST['kelamin'];
    }

    // Hitung keterangan berdasarkan nilai
    if ($nilai > 71) {
        $keterangan = "Lulus";
    } elseif ($nilai < 50) {
        $keterangan = "Drop Out";
    } else {
        $keterangan =  "Tidak Lulus";
    }

    $peserta = [
        [
            "Nama" => "<a href='sulton.php'>Muhammad Alief Sulton Zuhri</a>",
            "Kelamin" => "Laki-Laki",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='nadhira.php'>Nadhira Anysa Kurniawan</a>",
            "Kelamin" => "Perempuan",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='dyah.php'>Dyah Kursumawardani</a>",
            "Kelamin" => "Perempuan",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='odi.php'>Muhammad Odi Hafidz Setiawan</a>",
            "Kelamin" => "Laki-Laki",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='kukuh.php'>Kukuh Ari Prianto</a>",
            "Kelamin" => "Laki-Laki",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='ardin.php'>Linear Addien</a>",
            "Kelamin" => "Laki-Laki",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='santa.php'>Santa Patria Ika</a>",
            "Kelamin" => "Perempuan",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='ari.php'>Ari Purnama Aji</a>",
            "Kelamin" => "Laki-Laki",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='firaa.php'>Shafira Putri Maharani</a>",
            "Kelamin" => "Perempuan",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='ayura.php'>Ayura Safa Chintami</a>",
            "Kelamin" => "Perempuan",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='anggi.php'>Anggi Oktavia Ramadani</a>",
            "Kelamin" => "Perempuan",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='azis.php'>Muhammad Azis Hakiki</a>",
            "Kelamin" => "Laki-Laki",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='syahrul.php'>Syahrul Gunawan</a>",
            "Kelamin" => "Laki-Laki",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='imam.php'>Muhammad Imam Suryaman</a>",
            "Kelamin" => "Laki-Laki",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='dwi.php'>Dwi Rachmawaty</a>",
            "Kelamin" => "Perempuan",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ],
        [
            "Nama" => "<a href='hafizh.php'>Hafizh Ainaya Istanto</a>",
            "Kelamin" => "Laki-Laki",
            "Nilai" => "90",
            "Keterangan" => $keterangan,
        ]
        ];

    //Menambah Nama
    $newpeserta = [
        "Nama" => $nama,
        "Kelamin" => $kelamin,
        "Nilai" => $nilai,
        "Keterangan" => $keterangan,
    ];

    $nomor = count($peserta);


    // array push itu untuk menambahkan array baru (inputan) ke array lama (peserta)
    array_push($peserta, $newpeserta)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, table td{
            font-size: large;
            border-collapse: collapse;
            border: 1px solid black;
            padding: 5px 10px;
        }
    </style>
</head>
<body>

    <h2 align="center"> BIODATA PESERTA PELATIHAN
    <br>
    JUNIOR WEB DEVELOPER NB 2
    <br>
    KEMENTERIAN KETENAGAKERJAAN RI</h2>
    <hr>

    <table align="center" cellpadding="5px" border="1">
    <tr>
        <th>No.</th>
        <th>Nama</th>
        <th>Nilai</th>
        <th>Jenis Kelamin</th>
        <th>Keterangan</th>
    </tr>
        <!-- foreach itu menampilkan data satu persatu dan harus pake alias -->
         <!-- tampilkan $peserta alias $datapeserta -->
    <?php foreach($peserta as $index => $datapeserta) {?>
    <tr>
        <td><?php echo $index + 1; ?></td>
        <td><?php echo $datapeserta["Nama"]?></td>
        <td><?php echo $datapeserta["Kelamin"] ?></td>
        <td><?php echo $datapeserta["Nilai"] ?></td>
        <td><?php echo $datapeserta["Keterangan"] ?></td>
        
    </tr>
    <?php } ;?>
</table>
    <a href="!inputarrayassoc.php">Tambah Nilai</a>
</body>
</html>
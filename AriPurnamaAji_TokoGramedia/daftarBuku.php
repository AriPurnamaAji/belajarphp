<?php
// Inisialisasi array peserta dengan header tabel
$daftarBuku = [
    [
        "Buku" => "Fisika",
        "Kategori" => "Pendidikan",
        "Harga" => "150000",
        "Diskon" => "10",
    ],
    [
        "Buku" => "Biologi",
        "Kategori" => "Pendidikan",
        "Harga" => "175000",
        "Diskon" => "15",
    ],
    [
        "Buku" => "Kimia",
        "Kategori" => "Pendidikan",
        "Harga" => "197000",
        "Diskon" => "20",
    ],
    [
        "Buku" => "Gadget",
        "Kategori" => "Teknologi",
        "Harga" => "267000",
        "Diskon" => "28",
    ],
    [
        "Buku" => "Software",
        "Kategori" => "Teknologi",
        "Harga" => "123000",
        "Diskon" => "17",
    ],
    [
        "Buku" => "Internet",
        "Kategori" => "Teknologi",
        "Harga" => "234000",
        "Diskon" => "35",
    ],
    [
        "Buku" => "Novel",
        "Kategori" => "Fiksi",
        "Harga" => "57000",
        "Diskon" => "6",
    ],
    [
        "Buku" => "Komik",
        "Kategori" => "Fiksi",
        "Harga" => "97700",
        "Diskon" => "15",
    ],
    [
        "Buku" => "Puisi",
        "Kategori" => "Fiksi",
        "Harga" => "85000",
        "Diskon" => "7",
    ],
];

// Cek apakah form dikirim menggunakan metode POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $buku = htmlspecialchars($_POST['buku']); // Bersihkan input untuk menghindari XSS
    $kategori = htmlspecialchars($_POST['kategori']);
    $harga = intval($_POST['harga']); // Konversi nilai ke integer
    $diskon = intval($_POST['diskon']); // Konversi nilai ke integer

    // Validasi input
    if (!empty($buku) && !empty($kategori) && is_numeric($harga) && $harga >= 0 && $harga <= 10000000 && is_numeric($diskon) && $diskon >= 0 && $diskon <= 100) {
        // Tambahkan peserta baru ke array
        $newDaftarBuku = [
            "Buku" => $buku, // Tambahkan link jika diperlukan
            "Kategori" => $kategori,
            "Harga" => $harga,
            "Diskon" => $diskon
        ];
        array_push($daftarBuku, $newDaftarBuku);
    } else {
        echo "<p style='color: red;'>Semua field harus diisi, dan nilai harus angka antara 0 dan 100!</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            text-align:center;
        }
        table{
            margin: auto;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        button {
            margin: auto;
            padding: 3px;
        }
    </style>
</head>
<body>
<div class="container"> 

<!-- NAVBAR -->
    <nav>
        <div class="logo">
            <a href="TugasGramedia.html"><img src="gambar/gramedialogo.png"></img></a>	
        </div>

        <ul>
            <li class="kategori">
                <a href="">Kategori</a>
                    <ul class="subnav">
                        <li><a href="daftarBuku.php">BUKU</a></li>
                        <li><a href="">ETICKET</a></li>
                        <li><a href="">STATIONERY, SEKOLAH, KANTOR</a></li>
                        <li><a href="">EBOOK</a></li>
                        <li><a href="">MAJALAH</a></li>
                        <li><a href="">FASHION & AKSESORIS</a></li>
                        <li><a href="">TEKNOLOGI</a></li>
                        <li><a href=""></a>MAINAN & HOBI</li>
                    </ul>
            </li>
            <li class="search">
                <form>
                    <input class="search-text" type="text" placeholder="Cari...">	
                    </input>
                    <input class="button" type="button">
                    </input>
                </form>
            </li>
            <li>
                <a href="">Masuk</a>
            </li>
            <li>
                <img class="bag"><img src="gambar/bag.png"></img>
            </li>
        </ul>
    </nav>
    <b>Daftar Buku</b><hr>

    <table align="center">
        <tr>
            <th>No.</th>
            <th>Nama Buku</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Diskon</th>
            <th>Harga Diskon</th>
        </tr>
        <?php foreach ($daftarBuku as $index => $dataBuku): ?>
            <tr>
                <td><?php echo $index + 1 .  "."; ?></td>
                <td><a href="<?php echo ($dataBuku["Buku"]);?>.php"><?php echo ($dataBuku["Buku"]); ?></a> </td>
                <td><?php echo $dataBuku["Kategori"]; ?></td>
                <td><?php echo "Rp." . $dataBuku["Harga"]; ?></td>
                <td><?php echo $dataBuku["Diskon"] . "%"; ?></td>
                <td>
                    <?php 
                        if ($dataBuku["Diskon"] < 0 || $dataBuku["Diskon"] > 100) {
                            echo "Diskon tidak valid. Masukkan nilai diskon antara 0 dan 100";
                        } else {
                            $hargaSetelahDiskon = $dataBuku["Harga"] - ($dataBuku["Harga"] * ($dataBuku["Diskon"] / 100));
                            echo "Rp.$hargaSetelahDiskon";
                        }
                    ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <button><a style="text-decoration: none; color:black;" href="inputDaftarBuku.php">Tambah Buku</a></button>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body {
            text-align:center;
            align:center;
        }
        table{
            margin: auto;
        }
        table, th, td {
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

    <b>Tambah Buku</b><hr>
    <form action="daftarBuku.php" method="post">
    <table align=center>
        <tr>
            <td>Nama buku</td>
            <td>:</td>
            <td><input type="text" name="buku" required></td>
        </tr>
        <tr>
            <td>Kategori</td>
            <td>:</td>
            <td>
                <select name="kategori" required>
                    <option value="Fiksi">Fiksi</option>
                    <option value="Pendidikan">Pendidikan</option>
                    <option value="Teknologi">Teknologi</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td>
                <input type="number" name="harga" min="0" max="99999999" required>
            </td>
        </tr>
        <tr>
            <td>Diskon</td>
            <td>:</td>
            <td>
                <input type="number" name="diskon" min="0" max="100" required>
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><input type="submit" name="proses" value="Tambah"></td>
        </tr>
    </table>
    <br><br><hr><br>
    <b><a href="daftarBuku.php">Kembali</a></b>
    
</body>
</html>
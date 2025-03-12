<?php
    $judulBuku = "Kimia";
    $harga = "Rp197.000";
    $deskripsi = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur odio nisi, placeat, totam laudantium nostrum veniam assumenda ipsam reprehenderit excepturi necessitatibus. Eligendi fugiat culpa suscipit ut earum enim voluptas odit harum sequi corrupti incidunt ad sint nihil, eius necessitatibus debitis. Explicabo delectus quisquam accusamus nesciunt, cumque sequi similique itaque asperiores!";

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Detail Buku</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
            body {
                text-align:center;
            }
            table{
                margin: auto;
                width: 40%;
                background-color: #fff;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            table, th, td {
                border-collapse: collapse;
                padding: 5px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            tr {
                border: 1px solid black;
            }
        </style>
        </style>
    </head>
    <body>
    <div class="container"> 

<!-- NAVBAR -->
    <nav>
        <div class="logo">
            <img src="gambar/gramedialogo.png"></img>	
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
    <b>Detail Buku</b><hr>
        <table align="center">
        <tr>
            <td colspan=3 style="text-align:center;"><img src="https://image.gramedia.net/rs:fit:0:0/plain/https://cdn.gramedia.com/uploads/items/9786023742899_sma-ma_kl_10_kimia_1_kur_2013_ed_revisi.jpeg" width=200px><hr></td>
        </tr>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><?php echo $judulBuku; ?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td>:</td>
            <td><?php echo $harga; ?></td>
        </tr>
        <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><?php echo $deskripsi;?></td>
        </tr>
        </table>
        <b><a href="daftarBuku.php">Kembali</a></b>
    </body>
</html>
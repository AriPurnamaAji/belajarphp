<?php
// include "conn.php";
// session_start();
$home;
$karyawan;
$transaksi;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
        <li class="<?= $home ?>"><a href="home.php">Home</a></li>
        <li class="<?= $karyawan ?>"><a href="karyawan.php">Pasien</a></li>
        <li class="<?= $transaksi ?>"><a href="transaksi.php">Jadwal</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</body>
</html>
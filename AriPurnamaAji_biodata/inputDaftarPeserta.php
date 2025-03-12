<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peserta</title>
</head>
<body>
    <h3>Form Tambah Peserta</h3>
    <form action="daftarPeserta.php" method="POST">
        Nama: <input type="text" name="nama"><br><br>
        Jenis Kelamin:
        <select name="gender">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>
        Nilai: <input type="number" name="nilai"><br><br>
        <input type="submit" name="proses" value="Tambah">
    </form>
</body>
</html>
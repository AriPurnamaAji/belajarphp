<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peserta</title>
    <style>
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
    <h3 align=center>Form Tambah Peserta</h3>
    <h3 align=center>Junior Web Developer NB 2</h3>
    <h3 align=center>Kementrian Ketenagakerjaan RI</h3><hr>
    <br>
    <form action="tugasPHP.php" method="post">
    <table align=center>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>
                <select name="gender" required>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td>:</td>
            <td>
                <input type="number" name="nilai" min="0" max="100" required>
            </td>
        </tr>
        <tr>
            <td colspan=3 style="text-align:center"><input type="submit" name="proses" value="Tambah"></td>
        </tr>
    </table>

        <!-- Nama: <input type="text" name="nama" required><br><br>
        Jenis Kelamin:
        <select name="gender" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br><br>
        Nilai: <input type="number" name="nilai" min="0" max="100" required><br><br>
        <input type="submit" name="proses" value="Tambah"> -->
    </form>
</body>
</html>
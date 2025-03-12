<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Peserta dengan Background Gambar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f4f4f4;
        }
        form {
            /* background-image: url('lambo.jpg'); Gambar sebagai background form */
            /* background-size: cover; Gambar memenuhi seluruh area form */
            background-position: center; /* Posisi gambar di tengah */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
            color: black; /* Warna teks agar terlihat di atas gambar */
        }
        form label {
            color: rgba(0, 0, 0, 0.8);
            text-transform: upercase;
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        form input[type="text"]{
            background: lightgrey;
            height: 40px;
            line-height: 40px;
            border-radius: 20px;
            padding: 0px 20px;
            border: none;
            margin-bottom: 20px;
            color: black;
        }
        form input[type="radio"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        form input[type="radio"] {
            width: auto;
            margin-right: 10px;
        }
        .radio-group {
            margin-bottom: 15px;
        }
        .radio-group label {
            font-weight: normal;
            margin-right: 15px;
        }
        .button-container {
            text-align: center;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        button:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
        button:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>
    <form action="arrayassoc.php" method="POST">
        <label for="No">No:</label>
        <input type="text" id="No" name="No" required>

        <label for="Nama">Nama Peserta:</label>
        <input type="text" id="Nama" name="Nama" required>

        <div class="radio-group">
            <label>Jenis Kelamin:</label>
            <input type="radio" id="Laki-laki" name="Kelamin" value="Laki-laki" required>
            <label for="Laki-laki">Laki-laki</label>
            <input type="radio" id="Perempuan" name="Kelamin" value="Perempuan" required>
            <label for="Perempuan">Perempuan</label>
        </div>

        <label for="Nilai">Nilai:</label>
        <input type="text" id="Nilai" name="Nilai" required>

        <div class="button-container">
            <button type="submit" name="submit">Kirim</button>
        </div>
    </form>
</body>
</html>
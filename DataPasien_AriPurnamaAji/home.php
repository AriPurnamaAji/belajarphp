<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rumah Sakit Sehat Selalu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero {
            background: url('hospital.jpg') no-repeat center center/cover;
            height: 60vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 2rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
            position: relative;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .hero h1 {
            position: relative;
            z-index: 1;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="home.php">RS Purnama</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="#navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="home.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="pasien.php">Pasien</a></li>
                    <li class="nav-item"><a class="nav-link" href="rawatJalan.php">Rawat Jalan</a></li>
                    <li class="nav-item"><a class="nav-link" href="dokter.php">Dokter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <div class="hero text-center" style="background-image: url('https://i0.wp.com/rs.uns.ac.id/wp-content/uploads/2017/05/EDIT.jpg?fit=5184%2C2016&ssl=1');">
        <h1>Selamat Datang di Rumah Sakit Purnama</h1>
    </div>

    <!-- Tentang Kami -->
    <div class="container text-center my-5">
        <h2>Tentang Kami</h2>
        <p>Rumah Sakit Purnama adalah fasilitas kesehatan terbaik dengan layanan medis lengkap dan tenaga profesional.</p>
    </div>

    <!-- Layanan Kami -->
    <div class="container text-center my-5">
        <h2>Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <h3>Rawat Inap</h3>
                    <p>Fasilitas kamar yang nyaman untuk pasien.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <h3>Rawat Jalan</h3>
                    <p>Layanan konsultasi dokter spesialis.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 shadow">
                    <h3>Unit Gawat Darurat</h3>
                    <p>Siap melayani keadaan darurat 24/7.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Kontak Kami -->
    <div class="bg-primary text-white text-center p-4" id="contact">
        <h2>Kontak Kami</h2>
        <p>Alamat: Jl. Purnama No.123, Kota Medika</p>
        <p>Email: info@rspurnama.com | Telepon: (021) 123-4567</p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
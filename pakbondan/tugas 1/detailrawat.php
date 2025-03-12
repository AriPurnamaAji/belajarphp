<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rawat</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <a href="">HOME</a>
        <a href="pasien.php">PASIEN</a>
        <a href="rawat.php">RAWAT JALAN</a>
        <a href="">DOKTER</a>
    </nav>
    
<?php
$kode=$_GET['kode'];     
        $current_data = file_get_contents('rawat.json');
        $array_data = json_decode($current_data, true);
        foreach ($array_data as $listdata) {
            if($listdata['kode_rawat'] == $kode){
                $pasien_data = file_get_contents('data.json');
                $pasien_array = json_decode($pasien_data, true);
                foreach($pasien_array as $pasien){
                    if($pasien['nrm'] == $listdata['nrm']){
                        $nrm=$pasien['nrm'];
                        $nama=$pasien['nama'];
                        $kelamin=$pasien['jenis_kelamin'];
                        $t_lahir=$pasien['tempat_lahir'];
                        $tgl_lahir=$pasien['tanggal_lahir'];
                        $notlpn=$pasien['no_tlp'];
                        $alamat=$pasien['alamat'];
                    }
                }
                $dokter_data = file_get_contents('dokter.json');
                $dokter_array = json_decode($dokter_data, true);
                foreach($dokter_array as $dokter){
                    if($dokter['dokter_nip'] == $listdata['dokter_nip']){
                        $namaDr=$dokter['nama'];
                        $spesialis=$dokter['spesialisasi'];
                    }
                }
            }
        $keluhan=$listdata['keluhan'];
        $diagnosa=$listdata['diagnosa'];
        }    
?>
<p>Nrm : <?= $nrm ?></p>
<p>Nama : <?= $nama ?></p>
<p>Jenis Kelamin : <?= $kelamin ?></p>
<p>Tanggal Lahir : <?= $tgl_lahir ?></p>
<p>Alamat : <?= $alamat ?></p>
<p>No Telepon : <?= $notlpn ?></p>
<p>Keluhan : <?= $keluhan ?></p>  
<p>Diagnosa : <?= $diagnosa ?></p>
<br>
<p>Dokter : <?= $namaDr ?></p> 
<p>Spesialis : <?= $spesialis ?></p> 
    
</body>

</html>
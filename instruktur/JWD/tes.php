<?php
include "menubar.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Umur Pasien</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
	<div class="centered" style="width:400px">
        <h3 class="judul">Pasien Baru</h3>
        <form action="" method="post">
            <label for="">No. Rekam Medis</label>
            <input type="text" name="nomed" id="nomed" disabled>
            <label for="">Nama</label>
            <input type="text" name="nama" id="nama" required>
			
            <label for="">Jenis Kelamin</label>
			<input type="radio" id="male" name="gender" value="Laki-Laki" style="grid-column:2/2; justify-self: self-start;">
			<label for="" style="grid-column:3/6">Laki-Laki</label>
			<input type="radio" id="female" name="gender" value="Perempuan" style="grid-column:2/2; justify-self: self-start;">
			<label for="" style="grid-column:3/6">Perempuan</label>
            <label for="">Tempat Lahir</label>
            <input type="text" name="t_lahir" id="t_lahir" required>
            <label for="">Tanggal Lahir</label>
            <input type="Date" name="tgl_lahir" id="tgl_lahir" required>
            <br>
            <button class="buttonOk" type="submit" name="save">Save</button>
            <button class="button2" type="reset" onclick="location.href='karyawan.php'">Close</button>
            

        </form>
    </div>

    <div class="centered" style="width:400px">

				<?php 
                function umur($tanggal){
					$today = new DateTime('today');
                    // $waktuawal  = date_create('2018-02-21'); //waktu di setting
                    // $waktuakhir = date_create(); //2019-02-21 09:35 waktu sekarang

					$diff = date_diff($tanggal, $today); 
					echo 'Umur: ';
                    echo $diff->y . ' tahun, ';
                    echo $diff->m . ' bulan, ';
                    echo $diff->d . ' hari, ';	
                }

				if (isset($_POST['save'])) {
                    $nama= $_POST['nama'];
                    $gender= $_POST['gender'];
                    $t_lahir= $_POST['t_lahir'];
                    $tgl_lahir= $_POST['tgl_lahir'];
                    $date=date("d F Y", strtotime($tgl_lahir));

                    $tanggal = new DateTime($_POST['tgl_lahir']);
                    		
                    echo '<p>Nama : ' . $nama . '</p>';
                    echo '<p>Jenis Kelamin : ' . $gender . '</p>';
                    echo '<p>Tempat Lahir : ' . $t_lahir . '</p>';
                    echo '<p>Tanggal Lahir : ' . $date . '</p>';
                    umur($tanggal);	
				}
				?>
    </div>
    
		
			
			
				
 
				
			
		
	
</body>
</html>
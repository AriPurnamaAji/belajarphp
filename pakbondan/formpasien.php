<?php
    if(isset($_POST['save'])){
        if(file_exists('pasien.json')) {
            $final=tambah_data();
            file_put_contents('pasien.json',$final);
            header("Location : datapasien.php");
        }else{
            $final=data_baru();
            file_put_contents('pasien.json',$final);
            header("Location : datapasien.php");
        }
    }

    function tambah_data(){
        $nrm=$_POST['nrm'];
        $nama=$_POST['nama'];
        $jk=$_POST['jeniskelamin'];
        $tmplhr=$_POST['tmplahir'];
        $tgllahir=$_POST['lahir'];
        $tlp=$_POST['tlp'];
        $alamat=$_POST['alamat'];
        $tgldaftar=$_POST['tgldaftar'];
    
        $current_data = file_get_contents('data.json');
        $array_data = json_decode($current_data,true);{
            $pasien= [
                'NRM' =>$nrm,
                'Nama' =>$nama,
                'Jenis_kelamin' =>$jk,
                'Tempat_lahir'=>$tmplhr,
                'Tgl_lahir'=>$tgllahir,
                'No_telp'=>$tlp,
                'Alamat' =>$alamat,
                'TglDaftar'=>$tgldaftar
            ];
            $array_data[]=$pasien;
                $final=json_encode($array_data, JSON_PRETTY_PRINT);
                return $final;
        }
    }

    function data_baru(){
        $Nrm=$_POST['nrm'];
        $nama=$_POST['nama'];
        $jk=$_POST['jk'];
        $tmplhr=$_POST['tmplahir'];
        $tgllahir=$_POST['lahir'];
        $tlp=$_POST['tlp'];
        $alamat=$_POST['alamat'];
        $tgldaftar=$_POST['tgldaftar'];
    
        $array_data= array();
            $pasien= [
                'NRM' =>$Nrm,
                'Nama' =>$nama,
                'Jenis_kelamin' =>$jk,
                'Tempat_lahir'=>$tmplhr,
                'Tgl_lahir'=>$tgllahir,
                'No_telp'=>$tlp,
                'Alamat' =>$alamat,
                'TglDaftar'=>$tgldaftar
            ];
            $array_data[]=$pasien;
                $final=json_encode($array_data, JSON_PRETTY_PRINT);
                return $final;
        }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--Navbar-->
<ul>
    <li><a class="active" href="#home">Home</a></li>
    <li><a href="datapasien.php">Pasien</a></li>
    <li><a href="#contact">Transaksi</a></li>
    <li style="float:right"><a href="#about">Log Out</a></li>
</ul>
<?php     
    $thn = date('Y');
    if (file_exists('pasien.json')) {
        $current_data = file_get_contents('pasien.json');
        $array_data = json_decode($current_data, true);
        foreach ($array_data as $kode);
        if (empty($array_data)){
            $b = 1;
    
        } else {
            $a = substr($kode['NRM'],6);
            $b = $a + 1 ;
    
        }
        if($b<10){
            $Nrm = "MD" . $thn . "00" . $b;
        } elseif($b>9 && $b<100){
            $Nrm = "MD" . $thn . "0" . $b;
        } else{
            $Nrm = "MD" . $thn . $b;
        }
    }
    ?>
<!-- formulir -->

    <div class="container">
        <h2>Loket Pendaftaran Pasien</h2>
        <form action="" method="post" name="pasien" >
        <!-- NOMOR REKAM MEDIS-->
        <div class="form-group">
            <label for="nrm" readonly="">NRM</label>
            <input type="text" id="nrm" value="<?= $Nrm ?>" name="nrm"  readonly>
        </div>
        <!-- NAMA Pasien -->
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" v>
        </div>

        <div class="form-group">
            <label for="jk">Jenis Kelamin</label>
            <select id="jk" name="jk" onchange="" >
            <option value="">- Jenis Kelamin -</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="perempuan">perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tl">Tempat Lahir</label>
            <input type="text" id="tmplahir" name="tmplahir">
        </div>

        <div class="form-group">
            <label for="lahir">Tanggal Lahir</label>
            <input type="date" id="tgllahir" name="lahir">
        </div>


        <div class="form-group">
            <label for="telp">No Telepon</label>
            <input type="text" id="telp" name="tlp" >
        </div>

        <div class="form-group">
            <label for="tunjangan">Alamat</label>
            <input type="text" id="alamat" name="alamat" >
        </div>

        <div class="form-group">
            <label for="lahir">Tanggal Daftar</label>
            <input type="date" id="daftar" name="tgldaftar">
        </div>

        <button type="submit" name="save" id="save"class="btn btn-save" onclick=" return valid()">Save</button>
        <button class="btn btn-close" name="close" type="reset"><a href="datapasien.php">Close</a></button>
    
    </form>
    </div>
</body>
</html>
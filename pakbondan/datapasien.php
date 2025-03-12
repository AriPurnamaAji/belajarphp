<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="dp.css">
</head>
<body>
    <ul>
        <li><a class="active" href="#">Home</a></li>
        <li><a href="formpasien.php">Pasien</a></li>
        <li><a href="#contact">Transaksi</a></li>
        <li style="float:right"><a href="#about">Log Out</a></li>
    </ul>
    <br>
    <h1>Data Karyawan</h1>

    <button class="btn-save" ><a href="formpasien.php">Tambah</a></button>
    <br>
    <br>    
    <table>
    <tr>
        <th>No</th>
        <th>NRM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Tempat Lahir</th>
        <th>Tanggal Lahir</th>
        <th>No Telepon</th>
        <th>Alamat</th>
        <th>Tanggal Daftar</th>
        <th colspan="2"> Proses</th>

        </tr>
        <?php
        if(file_exists('pasien.json')){
            $current_data = file_get_contents('pasien.json');
            $array_data = json_decode($current_data,true);
            foreach($array_data as $index =>$kode ){
                $nik_kode[] = $kode['NRM'];
            }
        foreach($array_data as $index => $kode){?>
        <tr>
        
            <td><?php echo $index + 1 ; ?></td>
            <td><?php echo $kode["NRM"]; ?></td>
            <td><?php echo $kode["Nama"]; ?></td>
            <td><?php echo $kode["Jenis_kelamin"]; ?></td>
            <td><?php echo $kode["Tempat_lahir"]; ?></td>
            <td><?php echo $kode["Tgl_lahir"]; ?></td>
            <td><?php echo $kode["No_telp"]; ?></td>
            <td><?php echo $kode["Alamat"]; ?></td>
            <td><?php echo $kode["TglDaftar"]; ?></td>
            <td>
                <a href="edit.php?nrm=<?= $kode["NRM"] ?>">
                    <button class="btn-edit">EDIT</button>
                </a>
            </td>
            <td><a href="delete.php?NRM=<?= $kode["NRM"] ?>" onclick="return confirm('YAKIN MAU HAPUS  <?=$kode['NRM']?> <?=$kode['Nama']?>?:)')"><button class="btn-delete" >DELETE</button></a></td>
        </tr>

        <?php 
        }
        }
        ?>
    </table>
</body>
</html>
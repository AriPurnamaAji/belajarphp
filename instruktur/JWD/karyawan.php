<?php
$karyawan="active";
include "menubar.php";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
    <link rel="stylesheet" href="style.css">        
</head>
<body>
    <table>
        <tr class="head">
            <td colspan="6" align="right"><a href="addkaryawan.php"><button class="buttonOk">Add</button></a></td>
        </tr>
        <tr>
            <td>No.</td>
            <td>Nama Karyawan</td>
            <td>Jabatan</td>
            <td>Status</td>
            <td colspan="2">Proses</td>
        </tr>
        <?php
        $no=1;
        while($read=mysqli_fetch_array($queryread)){
        ?>
        <tr>
            <td><?= $no ?></td>
            <td><?= $read['Nama'] ?></td>
            <td><?= $read['Nama_Jabatan'] ?></td>
            <td><?= $read['Status'] ?></td>
            <td><a href="editkaryawan.php?id=<?= $read['id'] ?>"><button class="buttonOk">Edit</button></a></td>
            <td><a href="deletekaryawan.php?id=<?= $read['id'] ?>"><button class="button2">Delete</button></a></td>
        </tr>    
        <?php
        $no++;
        }
        ?>

    </table>
</body>
</html>
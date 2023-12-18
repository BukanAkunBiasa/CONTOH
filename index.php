<?php
require 'connection.php';
$mahasiswa = mysqli_query($conn, "SELECT * FROM mhs2");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halaman Utama</h1>
    <p>Data Mahasiswa</p>
    <div class="link"><a href="tambahData.php">+ Tambah Data</a></div>
    <table style="text-align:left ;border:1px solid;border-collapse: collapse;">
    <tr>
        <th style="border:1px solid; padding:10px; text-align:center">No</th>
        <th style="border:1px solid; padding:10px; text-align:center">Nim</th>
        <th style="border:1px solid; padding:10px; text-align:center">Nama</th>
        <th style="border:1px solid; padding:10px; text-align:center">Jenis Kelamin</th>
        <th style="border:1px solid; padding:10px; text-align:center">Prodi</th>
        <th style="border:1px solid; padding:10px; text-align:center">Alamat</th>
        <th style="border:1px solid; padding:10px; text-align:center">Opsi</th>
    </tr>
     
    <?php
        $no= 0;
    foreach ($mahasiswa as $mhs) {

    
        $no++; ?>
        <tr>
            <td style="border:1px solid; padding:10px; text-align:center"><?= $no ?></td>
            <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['nim'] ?></td>
            <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['nama'] ?></td>
            <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['jk'] ?></td>
            <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['prodi'] ?></td>
            <td style="border:1px solid; padding:10px; text-align:center"><?= $mhs['alamat'] ?></td>
        </tr>
        <?php } ?>
    </table>
        <!-- echo $mhs['nim'] . " | " .
        $mhs['nama'] . " | " .
        $mhs['jk'] . " | " . 
        $mhs['prodi'] . " | " . 
        $mhs['alamat'] . "<br>"; -->
    
   
</body>
</html>
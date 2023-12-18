<?php
require 'connection.php';
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $alamat = $_POST['alamat'];
        ('$nim', '$nama', '$jk', '$prodi', '$alamat')";
    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
        echo '<script>alert("Data berhasil ditambahkan!")</script>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
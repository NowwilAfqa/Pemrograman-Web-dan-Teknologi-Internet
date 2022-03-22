<?php

include("config.php");

if (isset($_POST['daftar'])) {

    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $ketersediaan = $_POST['ketersediaan'];

    $sql = "INSERT INTO buku VALUE ('', '$nama', '$nim', '$ketersediaan')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-buku.php?status=sukses');
    } else {
        header('Location: list-buku.php?status=gagal');
    }
} else {
    die("Akses dilarang...");
}

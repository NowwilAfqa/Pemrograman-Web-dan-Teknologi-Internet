<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id_buku'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $ketersediaan = $_POST['ketersediaan'];

    $sql = "UPDATE buku SET nama='$nama', nim='$nim', ketersediaan='$ketersediaan' WHERE id_buku=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-buku.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>
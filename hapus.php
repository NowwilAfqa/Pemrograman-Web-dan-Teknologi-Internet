<?php

include("config.php");

if( isset($_GET['id_buku']) ){

    $id_buku = $_GET['id_buku'];

    $sql = "DELETE FROM buku WHERE id_buku=$id_buku";
    $query = mysqli_query($db, $sql);

    if( $query ){
        header('Location: list-buku.php');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>
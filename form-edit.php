<?php

include("config.php");

if (!isset($_GET['id_buku'])) {
    header('Location: list-buku.php');
}

$id_buku = $_GET['id_buku'];

$sql = "SELECT * FROM buku WHERE id_buku=$id_buku";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) {
    die("data tidak ditemukan...");
}

?>


<!DOCTYPE html>
<html>

<head>
    <title>Perpustakaan Afqa</title>
</head>

<body>
    <header>
        <h3>Formulir Peminjaman Buku</h3>
    </header>

    <form action="proses-edit.php" method="POST">

        <input type="hidden" name="id_buku" value="<?php echo $siswa['id_buku'] ?>" />

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" />
        </p>
        <p>
            <label for="nim">NIM peminjam: </label>
            <input type="text" name="nim" placeholder="NIM peminjam" value="<?php echo $siswa['nim'] ?>" />
        </p>
        <p>
            <label for="ketersediaan">ketersediaan: </label>
            <label><input type="radio" name="ketersediaan" value="ya"> Ya</label>
            <label><input type="radio" name="ketersediaan" value="tidak"> Tidak</label>
        </p>
        <p>
            <input type="submit" value="Simpan" name="simpan">
            <a href="index.php">Batal</a>
        </p>


    </form>

</body>

</html>
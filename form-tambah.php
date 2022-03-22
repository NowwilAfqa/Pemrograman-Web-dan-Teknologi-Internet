<!DOCTYPE html>
<html>

<head>
    <title>Perpustakaan Afqa</title>
</head>

<body>
    <header>
        <h3>Formulir Peminjaman Buku</h3>
    </header>

    <form action="proses-penambahan.php" method="POST">

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" placeholder="nama buku" />
        </p>
        <p>
            <label for="nim">NIM peminjam: </label>
            <input type="text" name="nim" id="nim" placeholder="NIM peminjam" />
        </p>
        <p>
            <label for="ketersediaan">Ketersediaan: </label>
            <label><input type="radio" name="ketersediaan" value="ya"> Ya</label>
            <label><input type="radio" name="ketersediaan" value="tidak"> Tidak</label>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" id="daftar">
        </p>

    </form>

</body>

</html>
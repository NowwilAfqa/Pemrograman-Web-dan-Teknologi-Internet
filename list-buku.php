<?php include("config.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Perpustakaan Afqa</title>
</head>

<body>
    <header>
        <h3>Buku yang tersedia</h3>
    </header>

    <nav>
        <a href="form-tambah.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
        <thead>
            <tr>
                <th>id</th>
                <th>Nama</th>
                <th>NIM peminjam</th>
                <th>ketersediaan</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>

            <?php
            $sql = "SELECT * FROM Buku";
            $query = mysqli_query($db, $sql);

            while ($buku = mysqli_fetch_array($query)) {
                echo "<tr>";

                echo "<td>" . $buku['id_buku'] . "</td>";
                echo "<td>" . $buku['nama'] . "</td>";
                echo "<td>" . $buku['nim'] . "</td>";
                echo "<td>" . $buku['ketersediaan'] . "</td>";

                echo "<td>";
                echo "<a href='form-edit.php?id_buku=" . $buku['id_buku'] . "'>Edit</a> | ";
                echo "<a href='hapus.php?id_buku=" . $buku['id_buku'] . "'>Hapus</a>";
                echo "</td>";

                echo "</tr>";
            }
            ?>

        </tbody>
    </table>

    <p>Total Barang: <?php echo mysqli_num_rows($query) ?></p>

</body>

</html>
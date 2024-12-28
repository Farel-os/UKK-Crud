<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Data-Barang.css">
</head>

<body>
    <nav class="Navbar">
        <ul>
            <li><a href="../main/Login-Page.php">Login</a></li>
            <li><a href="../view/Data-Barang.php">Data Barang</a></li>
            <li><a href="../view/Tambah-Barang.php">Tambah Stok</a></li>
            <li><a href="../backend/Logout-Logic.php">Logout</a></li>
        </ul>
    </nav>

    <?php
   
    $conn = mysqli_connect("localhost", "root", "", "aplikasi_kasir");

    // Query untuk mengambil data dari tabel produk
    $query = "SELECT * FROM produk";
    $result = mysqli_query($conn, $query);

    ?>


    <h2>Daftar Barang</h2>
    <a href="Tambah-Barang.php">Tambah Barang</a><br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php
        include '../backend/koneksi.php';
        $query = "SELECT * FROM produk ORDER BY ProdukID ASC";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            while ($data = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($data['ProdukID']) . '</td>';
                echo '<td>' . htmlspecialchars($data['NamaProduk']) . '</td>';
                echo '<td>' . htmlspecialchars($data['Harga']) . '</td>';
                echo '<td>' . htmlspecialchars($data['Stok']) . '</td>';
                echo '<td><a href="../view/Update-Barang.php?id=' . htmlspecialchars($data['ProdukID']) . '" class="updateButton">Update</a> <a href="../backend/Delete-Logic.php?id=' . htmlspecialchars($data['ProdukID']) . '" class="deleteButton">Delete</a></td>';
                echo '</tr>';
            }
        }

        ?>
        <tr>

        </tr>
    </table>



</body>

</html>
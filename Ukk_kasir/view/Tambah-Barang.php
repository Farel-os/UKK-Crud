<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="../css/Tambah-Barang.css">
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

<div class="Produk">
    <form action="../backend/Logika-Tambah-Barang.php" method="POST">
        <label for="NamaProduk">Masukkan Nama Produk:</label>
        <input type="text" id="NamaProduk" name="NamaProduk" placeholder="Nama Produk" required>

        <label for="Harga">Masukkan Harga:</label>
        <input type="number" id="Harga" name="Harga" placeholder="Harga" required>

        <label for="Stok">Stok Tersedia:</label>
        <input type="number" id="Stok" name="Stok" placeholder="Stok" required>

        <input type="submit" name="submit" value="Tambah">
    </form>
</div>
</body>
</html>

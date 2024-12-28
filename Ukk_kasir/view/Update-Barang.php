<!DOCTYPE html>
<html>

<head>
    <title>Update Barang</title>
</head>
<?php
include '../backend/koneksi.php';
$id_barang = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM produk WHERE ProdukID='$id_barang'");
while ($data = mysqli_fetch_array($query)) {
?>

    <body>
        <h2>Form Update Barang</h2>
        <form action="../backend/Update-Logic.php" method="POST">
            <input type="hidden" name="ProdukID" value="<?php echo $data['ProdukID']; ?>">

            <label>Nama Produk:</label>
            <input type="text" name="NamaProduk" value="<?php echo $data['NamaProduk']; ?>" required>

            <label>Harga (Rp):</label>
            <input type="number" name="Harga" value="<?php echo $data['Harga']; ?>" required>

            <label>Stok:</label>
            <input type="number" name="Stok" value="<?php echo $data['Stok']; ?>" required>

            <button type="submit">Update</button>
        </form>
    <?php } ?>
    </body>

</html>
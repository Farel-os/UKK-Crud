<?php

$koneksi = mysqli_connect("localhost", "root", "", "aplikasi_kasir");


$id = $_POST['ProdukID'];
$nama = $_POST['NamaProduk'];
$harga = $_POST['Harga'];
$stok = $_POST['Stok'];

$query = "update produk set NamaProduk='$nama', Harga='$harga', Stok='$stok' where ProdukID='$id'";
$result = mysqli_query($koneksi, $query);


header("Location: ../view/Data-Barang.php");
?>


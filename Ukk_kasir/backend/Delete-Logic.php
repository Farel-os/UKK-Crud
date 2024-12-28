<?php 

include '../backend/koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"DELETE from produk where ProdukID='$id'");

header("location: ../view/Data-Barang.php");
?>
<?php

$koneksi = mysqli_connect("localhost", "root", "", "aplikasi_kasir");


if (isset($_POST['submit'])) {
   
    $NamaProduk = $_POST['NamaProduk'] ?? null;
    $Harga = $_POST['Harga'] ?? null;
    $Stok = $_POST['Stok'] ?? null;

    
    if ($NamaProduk && $Harga && $Stok) {
       
        $query = "INSERT INTO produk (NamaProduk, Harga, Stok) VALUES ('$NamaProduk', '$Harga', '$Stok')";
        $result = mysqli_query($koneksi, $query);

        if ($result) {
            header("Location: ../view/Data-Barang.php");
        } else {
            echo "Gagal menyimpan data: " . mysqli_error($koneksi);
        }
    } else {
        echo "Semua field harus diisi!";
    }
} else {
    echo "Form tidak dikirim!";
}

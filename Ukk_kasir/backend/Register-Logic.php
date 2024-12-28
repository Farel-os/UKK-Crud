<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "aplikasi_kasir");


$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];


$query_cek = "SELECT * FROM admin WHERE username = '$username'";
$result_cek = mysqli_query($koneksi, $query_cek);

if (mysqli_num_rows($result_cek) > 0) {
    echo "Username sudah digunakan! Silakan pilih username lain.";
} else {
    $query = "INSERT INTO admin (username, password, role) VALUES ('$username', '$password', '$role')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        header("Location: ../main/Login-Page.php");
    } else {
        echo "Registrasi gagal! Coba lagi.";
    }
}

<?php

session_start();


$koneksi = mysqli_connect("localhost", "root", "", "aplikasi_kasir");


$username = $_POST['username'];
$password = $_POST['password'];


$query = "SELECT * FROM admin WHERE username = '$username'";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);


    if ($password == $data['password']) {

        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];


        if ($data['role'] == "admin") {
            header("Location: ../admin/Admin-Page.php");
        } elseif ($data['role'] == "petugas") {
            header("Location: ../view/Data-Barang.php");
        } elseif ($data['role'] == "user") {
            header("Location: ../view/Home-Page.php");
        }
    } else {
        header("Location: ../public/Home-Page.php");
    }
} else {
    echo "Username tidak ditemukan!";
}
?>
>
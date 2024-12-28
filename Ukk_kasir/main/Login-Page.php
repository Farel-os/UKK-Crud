<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Login-Page.css">
</head>
<body>
<center>
    <div class="Login-Page">

    
    <h1>Login Disini</h1>
    <form action="../backend/Login-Logic.php" method="post">
        <label for="username" name="username">Username:</label>
        <input type="text" name="username" placeholder="Enter Username" required>

        <label for="password" name="password">Password:</label>
        <input type="password" name="password" placeholder="Enter Password" required>

        <label for="alamat" name="alamat">Alamat:</label>
        <input type="text" name="alamat" placeholder="Alamat">

        <label for="NoomorTelpom" name="NomorTelpon">Nomor Telepon:</label>
        <input type="number" name="NomorTelpon" placeholder="Nomor Telepon">

        <input type="submit" name="submit" value="Login">
    </form>
    <p>Belum punya akun? <a href="../main/Register-Page.php">Register</a></p>
    </div>

    </center>
    
</body>
</html>
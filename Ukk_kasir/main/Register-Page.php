<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/Register-Page.css">
</head>

<body>
    <center>
        <div class="Register-Page">

            <h1>Register</h1>
            <form action="../backend/Register-Logic.php" method="post">
                <label for="username">Username:</label>
                <input type="text" name="username" placeholder="Enter Username" required>

                <label for="password">Password:</label>
                <input type="password" name="password" placeholder="Enter Password" required>

                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" placeholder="Alamat" required>

                <label for="NoomorTelpom">Nomor Telepon:</label>
                <input type="text" name="NomorTelpon" placeholder="Nomor Telepon" required>

                <label for="role" name="role">Role:</label>
                <select id="" name="role">
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                    <option value="petugas">Petugas</option>
                </select>



                <input type="submit" name="submit" value="Register">

            </form>


            <p>Sudah punya akun? <a href="../main/Login-Page.php">Login</a></p>
        </div>
    </center>
</body>

</html>
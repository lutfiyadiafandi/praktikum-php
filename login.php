<?php
    $username = "admin";
    $password = "123";

    $login_message = "";
    $color_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["username"] == $username  AND $_POST["password"] == $password) {
            $login_message = "Login Berhasil";
            $color_message = "green";
        } else {
            $login_message = "Login Gagal";
            $color_message = "red";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Form Login</h1>

    <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username">
        <br>
        <label for="password">Password</label>
        <input type="password" name="password">
        <br>
        <button type="submit" value="Login">Login</button>
    </form>

    <span style="color: <?= $color_message; ?>;"><?= $login_message; ?></span>
</body>
</html>
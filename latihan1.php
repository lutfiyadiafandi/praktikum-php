<?php
    $username = "admin";
    $password = "123";

    $login_message = "";
    $color_message = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        echo infoPost($_POST);

        if ($_POST["username"] == $username  AND $_POST["password"] == $password) {
            $login_message = "Login Berhasil";
            $color_message = "green";
        } else {
            $login_message = "Login Gagal";
            $color_message = "red";
        }
    }

    function infoPost($arrayData) {
        $info = "<strong>Data</strong><br>";

        foreach($arrayData as $key => $value){
            $info .=  $key . " : " . $value . "<br>";
        }
        
        return $info;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h1>Form Login</h1>

    <form action="latihan1.php" method="POST">
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
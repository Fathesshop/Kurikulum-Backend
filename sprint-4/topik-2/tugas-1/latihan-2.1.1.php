<?php
$cookie_name = $_POST;
$cookie_value = $_POST;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
$username = ["muhammad", "dzul", "maarij", "rizqi", "fathullah"];
$password = ["muhammad", "dzul", "maarij", "rizqi", "fathullah"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login Cookie</title>
</head>
<body>
<h1>Login Cookie</h1>
    <form action="" method="post">
        <input type="text" name="username" id="username" placeholder="masukkan username">
        <input type="passwowrd" name="password" id="password" placeholder="masukkan password">
        <input class="btn btn-dark" type="submit" name="submit" value="Input">
    </form>
    <?php
    if(!isset($_COOKIE[$cookie_name])) {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    } else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>
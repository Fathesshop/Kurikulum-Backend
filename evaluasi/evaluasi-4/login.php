<?php
 session_start();
    if(isset($_SESSION["username"])) {
        header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <h1>HALAMAN LOGIN</h1>
    <form action="" method="post">
        <input type="text" name="username" id="username">
        <input type="text" name="password" id="password">
        <input type="submit" name="login" value="login">
    </form>
    <?php
    if (isset($_POST["login"])) {
        include("database.php");
        $connect = new Database();
        $username = $_POST["username"];
        $password = $_POST["password"];
        $connect->login($username, $password);
        header("location: index.php");
    }
    ?>
</body>
</html>
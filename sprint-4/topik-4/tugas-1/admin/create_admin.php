<?php
include "layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}
if (isset($_POST["create_admin"])) {
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = md5($_POST["password"]);
    $query = mysqli_query($con, "INSERT INTO admin (nama, username, password) VALUES ('$nama', '$username', '$password')");
    if ($query) {
        header("location:read_admin.php");
    }
}
?>
    <form action="" method="post">
        nama : <input type="text" name="nama" id="nama"><br>
        usename : <input type="text" name="username" id="username"><br>
        password : <input type="password" name="password" id="password"><br>
        <input type="submit" name="create_admin" value="tambah">
    </form>
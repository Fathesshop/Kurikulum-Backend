<?php
include"../config/connect.php";
// if(!$_SESSION["login"]){
//     header("location:login.php");
// }
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $query = mysqli_query($con, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
    $data = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) > 0) {
        session_start();
        $_SESSION["id"] = $data["id"];
        $_SESSION["login"] = true;
        header("location:index.php");
    }else {
        echo "username atau password salah!";
    }
}
?>
<form action="" method="post">
    <input type="text" name="username" id="username">
    <input type="password" name="password" id="password">
    <input type="submit" name="login" value="login">
</form>

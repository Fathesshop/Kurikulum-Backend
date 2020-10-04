<?php
include"layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}

$id = $_GET["id"];
    if (isset($_POST["update_label"])) {
        $cond = "";
        $nama = $_POST["nama"];
        $username = $_POST["username"];
        $password = md5($_POST["password"]);
        $cond .="nama = '$nama', username = '$username'";

        if (!empty($_POST["password"])) {
            $password = md5($_POST ["password"]);
            $cond .= ",password = '$password'";
        }
        
        $query = mysqli_query($con,"UPDATE admin SET $cond WHERE id = '$id'");
        if ($query) {
            header("location:read_admin.php");
        }
    }
    $query = mysqli_query($con,"SELECT * FROM admin WHERE id = '$id'");
    foreach($query as $key => $value) { 
?>
    
<form action="" method="post">
    nama : <input type="text" name="nama" id="nama" value="<?=$value["nama"];?>"><br>
    usename : <input type="text" name="username" id="username"  value="<?=$value["username"];?>"><br>
    password : <input type="password" name="password" id="password"><br>
    <input type="submit" name="update_label" value="simpan">
</form>
<?php } ?>
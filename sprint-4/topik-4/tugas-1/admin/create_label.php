<?php
include "layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}

if (isset($_POST["create_label"])) {
    $nama = $_POST["nama"];
    $query = mysqli_query($con, "INSERT INTO label (nama) VALUES ('$nama')");
    if ($query) {
        header("location:read_label.php");
    }
}
?>
<form action="" method="post">
    nama : <input type="text" name="nama" id="nama"><br>
    <input type="submit" name="create_label" value="tambah">
</form>

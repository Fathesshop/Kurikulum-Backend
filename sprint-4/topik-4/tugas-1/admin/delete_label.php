<?php
include "layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}
$id = $_GET["id"];

$query = mysqli_query($con, "DELETE FROM label WHERE id_label = '$id'");

if ($query) {
    header("location:read_label.php");
}
?>
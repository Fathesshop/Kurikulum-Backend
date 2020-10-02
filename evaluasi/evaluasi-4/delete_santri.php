<?php
include("database.php");
$connect = new Database();
$id = $_GET["id"];
$connect->delete_santri($id);
header("location: index.php");
    ?>
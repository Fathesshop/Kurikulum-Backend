<?php
include "layout/header.php";

$id = $_GET["id"];

$query = mysqli_query($con, "DELETE FROM artikel WHERE id = '$id'");

if ($query) {
    header("location:read_artikel.php");
}
?>
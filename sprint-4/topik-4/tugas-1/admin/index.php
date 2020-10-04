<?php
require "layout/header.php";

session_start();
if(!$_SESSION["login"]){
    header("location:login.php");
}
echo "welcome".$_SESSION["username"];
?>

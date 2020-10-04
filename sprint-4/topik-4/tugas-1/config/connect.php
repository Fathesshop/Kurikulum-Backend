<?php

$con = mysqli_connect("localhost","dzul","pondokit","website");
$db = mysqli_select_db("website",$con);
if($con){
    echo"koneksi terhubung";
}else {
    echo"database tidak ditemukan";
}

?>
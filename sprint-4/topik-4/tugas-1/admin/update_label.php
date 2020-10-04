<?php
include"layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}
?>

<?php $id = $_GET["id"];
if (isset($_POST["update_label"])) {
    $nama = $_POST["nama"];
    
    $query = mysqli_query($con,"UPDATE label SET nama = '$nama' WHERE id_label = '$id'");
    if ($query) {
        header("location:read_label.php");
    }
}
$query = mysqli_query($con,"SELECT * FROM label WHERE id_label = '$id'");
foreach($query as $key => $value) { 
?>
<form action="" method="post">
    nama : <input type="text" name="nama" id="nama" value="<?=$value["nama"];?>"><br>
    <input type="submit" name="update_label" value="simpan">
</form>
<?php } ?>
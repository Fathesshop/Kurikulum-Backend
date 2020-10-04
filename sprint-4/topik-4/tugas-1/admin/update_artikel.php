<?php
include"layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}

$id = $_GET["id"];
    if (isset($_POST["update_artikel"])) {
        $judul = $_POST["judul"];
        $label = $_POST["label"];
        $isi = $_POST["isi"];
        $gambar = $_FILES["gambar"]["name"];
        
        if (!empty($gambar)) {
            move_uploaded_file($_FILES["gambar"]["tmp_name"],"../upload/".$gambar);
            $query = mysqli_query($con,"UPDATE artikel SET judul = '$judul', label = '$label', isi = '$isi', gambar = '$gambar' WHERE id = '$id'");   
        }else {
            $query = mysqli_query($con,"UPDATE artikel SET judul = '$judul', label = '$label', isi = '$isi' WHERE id = '$id'");
        }
        if ($query) {
            header("location:read_artikel.php");
        }
    }
    $artikel = mysqli_query($con,"SELECT * FROM artikel WHERE id = '$id'");
    $data_artikel =mysqli_fetch_assoc($artikel);

    $label = mysqli_query($con, "SELECT * FROM label ORDER BY nama ASC");
    $data_label = mysqli_fetch_assoc($label);
?>
<form action="" method="post" enctype="multipart/form-data">
    judul : <input type="text" name="judul" id="judul" value="<?=$data_artikel["judul"];?>"><br>
    kategori : <select name="label" id="label">
        <option value="">-- pilih kategori</option>
        <?php do { ?>
        <option value="<?= $data_label["id_label"]; ?>" <?php if ($data_artikel["id"] == $data_label["id_label"])?>>
        <?= $data_label["nama"];?>
        </option>
        <?php } while($data_label = mysqli_fetch_assoc($label)); ?>
    </select><br>
    isi berita : <textarea name="isi"><?=$data_artikel["isi"];?></textarea><br>
    gambar : <input type="file" name="gambar" id="gambar"><br>
    <input type="submit" name="update_artikel" value="simpan">
</form>

<?php
include "layout/header.php";

if(!$_SESSION["login"]){
    header("location:login.php");
}

if (isset($_POST["create_artikel"])) {
    $judul = $_POST["judul"];
    $label = $_POST["label"];
    $isi = $_POST["isi"];
    $gambar = $_FILES["gambar"]["name"];

    move_uploaded_file($_FILES["gambar"]["tmp_name"],"../upload/".$gambar);
   
    $query = mysqli_query($con, "INSERT INTO artikel (judul, label, isi, gambar) VALUES ('$judul', '$label', '$isi', '$gambar')");
    if ($query) {
        header("location:read_artikel.php");
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    judul : <input type="text" name="judul" id="judul"><br>
    label : <select name="label" id="label">
        <option value="">-- pilih label</option>
        <?php
        $query = mysqli_query($con, "SELECT * FROM label ORDER BY nama ASC");
        foreach ($query as $key => $value) {
        ?>
        <option value="<?= $value["id_label"]; ?>"><?= $value["nama"]; ?></option>
        <?php } ?>
    </select><br>
    isi artikel : <textarea name="isi" id="isi"></textarea><br>
    gambar : <input type="file" name="gambar" id="gambar"><br>
    <input type="submit" name="create_artikel" value="tambah">
</form>
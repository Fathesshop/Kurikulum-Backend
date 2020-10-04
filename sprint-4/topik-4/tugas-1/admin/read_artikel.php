<?php
include "layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}
?>

<a href="create_artikel.php">buat</a>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>judul</th>
            <th>tanggal</th>
            <th>label</th>
            <th>isi</th>
            <th>gambar</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $query = mysqli_query($con, "SELECT label.*, artikel.* FROM artikel LEFT JOIN label ON artikel.id = label.id_label ORDER BY artikel.id DESC");
    foreach ($query as $key => $value) { 
    ?>
        <tr>
            <td><?=$key+1;?></td>
            <td><?=$value["judul"];?></td>
            <td><?=$value["tanggal"];?></td>
            <td><?=$value["nama"];?></td>
            <td><?=$value["isi"];?></td>
            <td><img src="../upload/<?=$value["gambar"];?>" style = "width:80px" ></td>
            <td>
                <a href="update_artikel.php?id=<?=$value["id"]?>">edit</a> -
                <a href="delete_artikel.php?id=<?=$value["id"]?>">delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

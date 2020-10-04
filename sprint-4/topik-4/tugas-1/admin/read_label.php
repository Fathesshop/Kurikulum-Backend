<?php
include "layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}
?>

<a href="create_label.php">buat</a>
<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>nama</th>
            <th>aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $query = mysqli_query($con, "SELECT * FROM label order by id_label DESC");
    foreach ($query as $key => $value) { 
    ?>
        <tr>
            <td><?=$key+1;?></td>
            <td><?=$value["nama"];?></td>
            <td>
                <a href="update_label.php?id=<?=$value["id"]?>">edit</a> -
                <a href="delete_label.php?id=<?=$value["id"]?>">delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>

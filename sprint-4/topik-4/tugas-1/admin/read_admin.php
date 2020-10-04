<?php

include"layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}
?>

<a href="create_admin.php">buat</a>
<table border="1">
    <thead>
        <tr>
            <th>no.</th>
            <th>nama</th>
            <th>username</th>
            <th>password</th>
            <th>aksi</th>
        </tr>
    <tbody>
    <?php $query = mysqli_query($con, "SELECT * FROM admin ORDER BY id DESC");
    foreach ($query as $key => $value) { 
    ?>
        <tr>
            <td><?=$key+1;?></td>
            <td><?=$value["nama"];?></td>
            <td><?=$value["username"];?></td>
            <td><?=$value["password"];?></td>
            <td>
                <a href="update_admin.php?id=<?=$value["id"]?>">edit</a> -
                <a href="delete_admin.php?id=<?=$value["id"]?>">delete</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
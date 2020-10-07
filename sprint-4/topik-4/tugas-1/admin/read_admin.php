<?php

include"layout/header.php";
if(!$_SESSION["login"]){
    header("location:login.php");
}
?>
<a href="create_admin.php">buat</a>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<thead>
                <tr>
                    <th>no.</th>
                    <th>nama</th>
                    <th>username</th>
                    <th>password</th>
                    <th>aksi</th>
                </tr>
			</thead>
			<tbody>
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
			</tbody>
		</table>
    </div>
    

<!--  -->

<?php

include"layout/footer.php";
?>
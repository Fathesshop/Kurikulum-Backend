<?php
require "layout/header.php";

$query = mysqli_query($con, "SELECT label.*, artikel.* FROM artikel LEFT JOIN label ON artikel.id = label.id_label ORDER BY artikel.id DESC");
$data = mysqli_fetch_assoc($query);

do{ 
?>

<div>
    <div>
        <img src="upload/<?=$data["gambar"];?>" width="200px">
    </div>
    <div>
        <h5><a href="artikel.php?id=<?=$data["id"];?>"><?=$data["judul"]; ?></a></h5>
    </div>
    <div>
        <ul>
            <li><a href="label.php?id=<?=$data["id_label"];?>"><?=$data["nama"]; ?></a></li>
            <li><a href="#"><?=$data["tanggal"]; ?></a></li>
        </ul>
    </div>
</div>
<?php }while ($data = mysqli_fetch_assoc($query));
require "layout/footer.php";
?>




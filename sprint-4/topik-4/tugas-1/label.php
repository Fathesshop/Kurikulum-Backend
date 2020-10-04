<?php 

include("layout/header.php");

$id = $_GET["id"];

$query = mysqli_query($con, "SELECT * FROM artikel WHERE id = '$id' ORDER BY id DESC");
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
            <?=$data["tanggal"]; ?>
    </div>
    <div>
        <a href="artikel?id=<?=$data["id"];?>">lihat</a>
    </div>
</div>
<?php }while ($data = mysqli_fetch_assoc($query));
require "layout/footer.php";
?>
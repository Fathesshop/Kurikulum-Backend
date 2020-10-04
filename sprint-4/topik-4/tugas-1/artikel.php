<?php 

include("layout/header.php");

$id = $_GET["id"];

$query = mysqli_query($con, "SELECT label.*, artikel.* FROM artikel LEFT JOIN label ON artikel.id = label.id_label WHERE artikel.id = '$id'");
$data = mysqli_fetch_assoc($query);

?>

<div>
    <div>
        <img src="upload/<?= $data["gambar"];?>" style="width:500px;height:300px">
    </div>
    <div>
        <p>label : <a href="label.php?id=<?= $data["id_label"];?>"><?= $data["nama"];?></a></p>
        <p>rilis : <?= $data["tanggal"];?></p>
    </div>
    <div>
        <p><?= $data["isi"];?></p>
    </div>
</div>
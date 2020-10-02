<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("database.php");
    $connect = new Database();
    $data = $connect->edit_santri($_GET["id"]);
    $connect_data = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($connect_data as $key => $value) {
    ?>
    <form action="" method="post">
        <input type="hidden" name="id" id="id" value="<?= $value["id"] ?>">
        <input type="text" name="nama" id="nama" value="<?= $value["nama"] ?>">
        <input type="text" name="asal" id="asal" value="<?= $value["asal"] ?>">
        <input type="text" name="divisi" id="divisi" value="<?= $value["divisi"] ?>">
        <input type="submit" name="update" value="update">
    </form>
    <?php } ?>

    <?php
    $connect = new Database();
    if (isset($_POST["update"])) {
        $id = $_POST["id"];
        $nama = $_POST["nama"];
        $asal = $_POST["asal"];
        $divisi = $_POST["divisi"];
        $connect->update_santri($nama, $asal, $divisi, $id);
        header("location: index.php");
    }
    ?>
</body>
</html>
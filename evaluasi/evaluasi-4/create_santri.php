<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>
<body>
    <h1>HALAMAN CREATE SANTRI</h1>
    <form action="" method="post">
        <input type="text" name="nama" id="nama">
        <input type="text" name="asal" id="asal">
        <input type="text" name="divisi" id="divisi">
        <input type="submit" name="create" value="create">
    </form>
    <?php
    include("database.php");
    $connect = new Database();
    if (isset($_POST["create"])) {
        $nama = $_POST["nama"];
        $asal = $_POST["asal"];
        $divisi = $_POST["divisi"];
        $connect->create_santri($nama, $asal, $divisi);
        header("location: index.php");
    }
    ?>
    
</body>
</html>
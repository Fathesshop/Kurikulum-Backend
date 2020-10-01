<?php
session_start();
if(!isset($_SESSION["username"])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT BARANG</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Menu Edit Barang</h1>
            <?php
            include("koneksi.php");
            $data = new DataBarang();
            $barang = $data->barang_id($_GET["id"]);
            $data_barang = $barang->fetchAll(PDO::FETCH_ASSOC);
            foreach ($data_barang as $key => $value) {
            ?>
        <form action="barang.php" method="post">
            <input type="hidden" name="id" value="<?= $value["id"]?>">
            <input type="text" name="update_barang" id="update_barang" value="<?= $value["nama"]?>">
            <input type="text" name="update_harga" id="update_harga" value="<?= $value["harga"]?>">
            <input type="text" name="update_kurir" id="update_kurir" value="<?= $value["kurir"]?>">
            <input type="text" name="update_pengirim" id="update_pengirim" value="<?= $value["pengirim"]?>">
            <input type="text" name="update_asal" id="update_asal" value="<?= $value["asal"]?>">
            <input type="text" name="update_tujuan" id="update_tujuan" value="<?= $value["tujuan"]?>">
            <input class="btn btn-dark" type="submit" name="update" value="update">
        </form>
        <?php } ?>
</body>
</html>
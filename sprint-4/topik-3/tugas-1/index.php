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
    <title>DATA BARANG</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA BARANG</th>
                    <th>HARGA BARANG</th>
                    <th>NAMA KURIR</th>
                    <th>NAMA PENGIRIM</th>
                    <th>ASAL BARANG</th>
                    <th>TUJUAN BARANG</th>
                    <th>EDIT DAN HAPUS</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include("koneksi.php");
                $data = new DataBarang();
                $barang = $data->barang();
                $data_barang = $barang->fetchAll(PDO::FETCH_ASSOC);
                foreach ($data_barang as $key => $value) {
                ?>
                <tr>
                    <td><?= $key+1?></td>
                    <td><?= $value["nama"]?></td>
                    <td><?= $value["harga"] ?></td>
                    <td><?= $value["kurir"]?></td>
                    <td><?= $value["pengirim"]?></td>
                    <td><?= $value["asal"] ?></td>
                    <td><?= $value["tujuan"]?></td>
                    <td><a class = "btn btn-primary" href="update_barang.php?id=<?=$value["id"]?>">Edit</a> <a class = "btn btn-danger" href="barang.php?id=<?=$value["id"]?>">Hapus</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <a href="input_barang.php" class="btn btn-dark btn-lg btn-block">INPUT BARANG</a>
    <form action="" method="get">
        <button class="btn btn-danger btn-lg btn-block" name="logout" id="logout">KLIK UNTUK LOGOUT</button>
    </form>
    <?php
    if (isset($_GET["logout"])) {
        session_unset();
        session_destroy();
        header("location: login.php");
    }
    ?>
</body>
</html>
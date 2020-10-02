<?php
//  session_start();
//     if(!isset($_SESSION["username"])) {
//         header("location: login.php");
//     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERANDA</title>
</head>
<body>
    <h1>HALAMAN DATA SANTRI</h1>
<a href="create_santri.php">CREATE SANTRI</a>
    <table>
        <thead>
            <tr>
                <td>ID</td>
                <td>NAMA</td>
                <td>ASAL</td>
                <TD>DIVISI</TD>
            </tr>
        </thead>
        <tbody>
            <?php
            include("database.php");
            $connect = new Database();
            $data = $connect->read_santri();
            $connect_data = $data->fetchAll(PDO::FETCH_ASSOC);
            foreach ($connect_data as $key => $value) {
            ?>
            <tr>
                <td><?= $value["id"] ?></td>
                <td><?= $value["nama"] ?></td>
                <td><?= $value["asal"] ?></td>
                <td><?= $value["divisi"] ?></td>
                <td> <a href="update_santri.php?id=<?= $value["id"] ?>">UPDATE</a> <a href="delete_santri.php?id=<?= $value["id"] ?>">DELETE</a></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <button type="submit" name="logout"></button>
</body>
</html>
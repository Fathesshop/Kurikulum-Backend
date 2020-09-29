<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT BARANG</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Menu Input Barang</h1>
        <form action="barang.php" method="post">
            <table>
                <tr>
                    <td>
                        <input type="text" name="nama_barang" id="nama_barang" placeholder="nama barang">
                    </td>
                    <td>
                        <input type="text" name="harga_barang" id="harga_barang" placeholder="harga barang">
                    </td>
                    <td>
                        <input type="text" name="nama_kurir" id="nama_kurir" placeholder="nama kurir">
                    </td>
                    <td>
                        <input type="text" name="nama_pengirim" id="nama_pengirim" placeholder="nama pengirim">
                    </td>
                    <td>
                        <input type="text" name="asal_barang" id="asal_barang" placeholder="asal barang">
                    </td>
                    <td>
                        <input type="text" name="tujuan_barang" id="tujuan_barang" placeholder="tujuan barang">
                    </td>
                    <td>
                        <input class="btn btn-dark" type="submit" name="submit" value="Input">
                    </td>
                </tr>
            </table>
    </form>
</body>
</html>
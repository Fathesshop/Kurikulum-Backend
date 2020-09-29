
    <?php
    include("koneksi.php");
    if (isset($_POST["submit"])) {
        $nama_barang = $_POST["nama_barang"];
        $harga_barang = $_POST["harga_barang"];
        $nama_kurir = $_POST["nama_kurir"];
        $nama_pengirim = $_POST["nama_pengirim"];
        $asal_barang = $_POST["asal_barang"];
        $tujuan_barang = $_POST["tujuan_barang"];
        $data = new DataBarang();
        $barang = $data->input_barang($nama_barang, $harga_barang, $nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang);
        if ($barang) {
            header ('Location: index.php');
            } 
            } else {
                die();
    }
    ?>
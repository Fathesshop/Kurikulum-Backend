
<?php
include("koneksi.php");
$data = new DataBarang();
if (isset($_POST["submit"])) {
    $nama_barang = $_POST["nama_barang"];
    $harga_barang = $_POST["harga_barang"];
    $nama_kurir = $_POST["nama_kurir"];
    $nama_pengirim = $_POST["nama_pengirim"];
    $asal_barang = $_POST["asal_barang"];
    $tujuan_barang = $_POST["tujuan_barang"];
    $barang = $data->input_barang($nama_barang, $harga_barang, $nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang);
    header ('Location: index.php');
}
if (isset($_POST["update"])) {
    $update_barang = $_POST["update_barang"];
    $update_harga = $_POST["update_harga"];
    $update_kurir = $_POST["update_kurir"];
    $update_pengirim = $_POST["update_pengirim"];
    $update_asal = $_POST["update_asal"];
    $update_tujuan = $_POST["update_tujuan"];
    $id = $_POST["id"];
    $barang = $data->update_barang($update_barang, $update_harga, $update_kurir, $update_pengirim, $update_asal, $update_tujuan, $id);
    header ('Location: index.php');
}
if (isset($_GET["hapus"])== "barang") {
    $data->delete_barang($_GET["id"]);
    header ('Location: index.php');
}
?>
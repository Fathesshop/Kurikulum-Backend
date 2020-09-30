<?php
Class DataBarang {
    public function __construct()
    {
        $this->database = new PDO("mysql:host=localhost;dbname=pondokit", "dzul", "pondokit");
    }
    public function barang()
    {
        $barang = "SELECT * FROM barang";
        $data = $this->database->prepare($barang);
        $data->execute();
        return $data;
        
    }
    public function input_barang($nama_barang, $harga_barang, $nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang)
    {
        $input = "INSERT INTO barang(nama, harga, kurir, pengirim, asal, tujuan) VALUES(?, ?, ?, ?, ?, ?)";
        $data = $this->database->prepare($input);
        return $data->execute([$nama_barang, $harga_barang, $nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang]);
    }
    public function barang_id($id)
    {
        $barang = "SELECT * FROM barang WHERE id = $id";
        $data = $this->database->prepare($barang);
        $data->execute();
        return $data;
        
    }
    public function update_barang($update_barang, $update_harga, $update_kurir, $update_pengirim, $update_asal, $update_tujuan, $id)
    {
        $update = "UPDATE barang SET nama=?, harga=?, kurir=?, pengirim=?, asal=?, tujuan=? WHERE id=?";
        $data = $this->database->prepare($update);
        $data->execute([$update_barang, $update_harga, $update_kurir, $update_pengirim, $update_asal, $update_tujuan, $id]);
    }
    public function delete_barang($id)
    {
        $delete = "DELETE FROM barang WHERE id=?";
        $data = $this->database->prepare($delete);
        $data->execute([$id]);
        return $data;
    }
}
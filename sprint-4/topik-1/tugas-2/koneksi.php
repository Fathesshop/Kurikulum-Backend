<?php
Class DataBarang {
    public function __construct()
    {
        $this->database = new PDO('mysql:host=localhost;dbname=pondokit', "dzul", "pondokit");
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
        $input = "INSERT INTO barang(nama, harga, kurir, pengirim, asal, tujuan) VALUES(?, ?), ?, ?, ?, ?";
        $data = $this->database->prepare($input);
        return $data->execute([$nama_barang, $harga_barang]);
    }

}
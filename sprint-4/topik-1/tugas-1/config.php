<?php
Class Barang {
    public function __construct()
    {
        $this->database = new PDO("mysql:host=localhost;dbname=fathesshop", "dzul", "pondokit");
    }

    public function input_barang($nama_barang, $harga_barang)
    {
        $input = "INSERT INTO barang(Nama, Harga) VALUES(?, ?)";
        $statment = $this->database->prepare($input);
        return $statment->execute([$nama_barang, $harga_barang]);
    }

    public function input_status($nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang)
    {
        $input = "INSERT INTO status(Kurir, Pengirim, Asal, Tujuan) VALUES(?, ?, ?, ?)";
        $statment = $this->database->prepare($input);
        return $statment->execute([$nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang]);
    }

    public function barang()
    {
        $barang = "SELECT * FROM barang";
        $statment = $this->database->prepare($barang);
        $statment->execute();
        return $statment;
        
    }
    public function status()
    {
        $barang = "SELECT * FROM status";
        $statment = $this->database->prepare($barang);
        $statment->execute();
        return $statment;
        
    }
}
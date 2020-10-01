<?php
Class DataBarang {
    public function __construct()
    {
        $this->database = new PDO("mysql:host=localhost;dbname=pondokit", "dzul", "pondokit");
    }
    public function login($username, $password)
    {
        $query = "SELECT * FROM user WHERE username = ? AND password = ?";
        $check = $this->database->prepare($query);
        $check->execute([$username, $password]);
        $result = $check->fetchAll(PDO::FETCH_ASSOC);
        if (count($result) > 0) {
                $_SESSION['username'] = $result[0]['username'];
        }
    }
    public function register($username, $password)
    {
        $input = "INSERT INTO user(username, password) VALUES(?, ?)";
        $check = $this->database->prepare($input);
        return $check->execute([$username, $password]);
    }
    public function barang()
    {
        $query = "SELECT * FROM barang";
        $check = $this->database->prepare($query);
        $check->execute();
        return $check;
        
    }
    public function input_barang($nama_barang, $harga_barang, $nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang)
    {
        $input = "INSERT INTO barang(nama, harga, kurir, pengirim, asal, tujuan) VALUES(?, ?, ?, ?, ?, ?)";
        $check = $this->database->prepare($input);
        return $check->execute([$nama_barang, $harga_barang, $nama_kurir, $nama_pengirim, $asal_barang, $tujuan_barang]);
    }
    public function barang_id($id)
    {
        $query = "SELECT * FROM barang WHERE id = $id";
        $check = $this->database->prepare($query);
        $check->execute();
        return $check;
        
    }
    public function update_barang($update_barang, $update_harga, $update_kurir, $update_pengirim, $update_asal, $update_tujuan, $id)
    {
        $update = "UPDATE barang SET nama=?, harga=?, kurir=?, pengirim=?, asal=?, tujuan=? WHERE id=?";
        $check = $this->database->prepare($update);
        $check->execute([$update_barang, $update_harga, $update_kurir, $update_pengirim, $update_asal, $update_tujuan, $id]);
        return $check;
    }
    public function delete_barang($id)
    {
        $delete = "DELETE FROM barang WHERE id=?";
        $check = $this->database->prepare($delete);
        $check->execute([$id]);
        return $check;
    }
}
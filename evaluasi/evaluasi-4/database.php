<?php
class Database {
    public function __construct() {
        $this->database = new PDO("mysql:host=localhost;dbname=pondok", "dzul", "pondokit");
    }

    public function login($username, $password) {
        $query = "SELECT * FROM user WHERE username = ? AND password = ?";
        $check = $this->database->prepare($query);
        $check->execute([$username, $password]);
        $result = $check->fetchAll(PDO::FETCH_ASSOC);
        if (($result) > 0) {
                $_SESSION["username"] = $result[0]["username"];
        }
    }

    public function register($username, $password) {
        $input = "INSERT INTO user(username, password) VALUES(?, ?)";
        $check = $this->database->prepare($input);
        return $check->execute([$username, $password]);
    }

    public function create_santri($nama, $asal, $divisi) {
        $input = "INSERT INTO santri(nama, asal, divisi) VALUES(?, ?, ?)";
        $check = $this->database->prepare($input);
        return $check->execute([$nama, $asal, $divisi]);
    }
    public function read_santri() {
        $query = "SELECT * FROM santri";
        $check = $this->database->prepare($query);
        $check->execute();
        return $check;
    }
    
    public function edit_santri($id) {
        $query = "SELECT * FROM santri WHERE id = $id";
        $check = $this->database->prepare($query);
        $check->execute();
        return $check;
    }
   
    public function update_santri($nama, $asal, $divisi, $id) {
        $update = "UPDATE santri SET nama=?, asal=?, divisi=? WHERE id=?";
        $check = $this->database->prepare($update);
        $check->execute([$nama, $asal, $divisi, $id]);
        return $check;
    }

    public function delete_santri($id) {
        $delete = "DELETE FROM santri WHERE id=?";
        $check = $this->database->prepare($delete);
        $check->execute([$id]);
        return $check;
    }
}
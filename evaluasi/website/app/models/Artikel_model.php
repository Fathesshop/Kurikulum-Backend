<?php

class Artikel_model {
    private $table = 'artikel';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function readAllArtikel() 
    {
        $this->db->query('SELECT * FROM artikel ORDER BY id DESC');
        return $this->db->resultSet();
    }
    public function readArtikelById($id) 
    {
        $this->db->query('SELECT * FROM artikel WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function newAllArtikel() 
    {
        $this->db->query('SELECT * FROM  artikel ORDER BY id DESC LIMIT 7');
        return $this->db->resultSet();
    }
    public function createArtikel($data)
    {
        $query = "INSERT INTO artikel(judul, label, penulis, gambar, isi) VALUES (:judul, :label, :penulis, :gambar, :isi)";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('label', $data['label']);
        $this->db->bind('penulis', $data['penulis']);
        if (!$_FILES['gambar']['error'] == 4) {
            $this->db->bind('gambar', $_FILES['gambar']['name']);
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../public/img/' . $_FILES['gambar']['name']);
        }else {
            $this->db->bind('gambar', NULL);
        }
        $this->db->bind('isi', $data['isi']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteArtikel($id)
    {
        $query = "DELETE FROM artikel WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateArtikel($data)
    {
        $query = "UPDATE artikel SET judul = :judul, label = :label, penulis = :penulis, gambar = :gambar, isi = :isi WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('judul', $data['judul']);
        $this->db->bind('label', $data['label']);
        $this->db->bind('penulis', $data['penulis']);
        if (!$_FILES['gambar']['error'] == 4) {
            $this->db->bind('gambar', $_FILES['gambar']['name']);
            move_uploaded_file($_FILES['gambar']['tmp_name'], '../public/img/' . $_FILES['gambar']['name']);
        }else {
            $this->db->bind('gambar', $data['gambarhide']);
        }
        $this->db->bind('isi', $data['isi']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function searchArtikel()
    {
        $search = $_POST['search'];
        $query = "SELECT * FROM artikel WHERE isi LIKE :search";
        $this->db->query($query);
        $this->db->bind('search', "%$search%");
        return $this->db->resultSet();
    }
    
}
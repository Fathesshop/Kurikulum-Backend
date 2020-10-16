<?php

class Anaklangit_model {
    private $table = 'anaklangit';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllAnaklangit() 
    {
        $this->db->query('SELECT * FROM '. $this->table);
        return $this->db->resultSet();
    }
    public function getAnaklangitById($id) 
    {
        $this->db->query('SELECT * FROM '. $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function tambahDataAnaklangit($data)
    {
        $query = "INSERT INTO anaklangit(nama, nrp, email, kerja) VALUES (:nama, :nrp, :email, :kerja)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('kerja', $data['kerja']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataAnaklangit($id)
    {
        $query = "DELETE FROM anaklangit WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function ubahDataAnaklangit($data)
    {
        $query = "UPDATE anaklangit SET nama = :nama, nrp = :nrp, email = :email, kerja = :kerja WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('nrp', $data['nrp']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('kerja', $data['kerja']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function cariDataAnaklangit()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM anaklangit WHERE nama LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
    
}
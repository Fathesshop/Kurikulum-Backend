<?php

class connectpdo
{
    protected $server = "localhost",
    $username         = "dzul",
    $password         = "pondokit";
    
    public function __construct()
    {
        $this->connect = new PDO("mysql:host=$this->server; dbname=dzul", $this->username, $this->password);
    }

    public function inputsantri()
    {
        echo "\nIngin input berapa data : ";
        $inputsantri = trim(fgets(STDIN));
        for ($i = 0; $i < $inputsantri; $i++) {
            echo "Masukkan Nama : ";
            $nama = trim(fgets(STDIN));
            echo "Masukkan Nilai : ";
            $nilai = trim(fgets(STDIN));
        }
        $query = "INSERT INTO santri(nama, nilai) VALUES(?, ?)";
        $show = $this->connect->prepare($query);
        $show->execute([$nama, $nilai]);
    }

    public function datasantri()
    {
        echo "\ndaftar data santri : \n";
        $query = "SELECT * FROM santri";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
    }

    public function hitungdata()
    {
        echo "\nJumlah data santri : \n";
        $query = "SELECT COUNT(id) FROM santri";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
    }

     public function meannilai()
    {
        echo "\nNilai Rata-Ratanya santri adalah : \n";
        $query = "SELECT AVG(nilai) FROM santri";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(PDO::FETCH_ASSOC);
        print_r($result);
    }

    public function nilaitinggi()
    {
        echo "\nsantri dengan nilai tinggi lebih dari 80 : \n";
        // $query = "SELECT * FROM santri WHERE nilai > 80 ORDER BY nilai ASC ";
        $query = "SELECT santri.nama, santri.nilai, jurusan.jurusan, jurusan.pengajar, status.status, status.keterangan
                  FROM data
                  INNER JOIN santri ON santri.id = data.id_santri
                  INNER JOIN jurusan ON jurusan.id = data.id_jurusan
                  INNER JOIN status ON status.id = data.id_status
                  WHERE santri.nilai > 80 ORDER BY santri.nilai ASC";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $key => $data) {
            print_r($data);
        }
    }

    public function nilairendah()
    {
        echo "\nsantri dengan nilai kurang dari sama dengan 65 : \n";
        // $query = "SELECT * FROM santri WHERE nilai <= 65 ORDER BY nilai DESC ";
        $query = "SELECT santri.nama, santri.nilai, jurusan.jurusan, jurusan.pengajar, status.status, status.keterangan
                  FROM data
                  INNER JOIN santri ON santri.id = data.id_santri
                  INNER JOIN jurusan ON jurusan.id = data.id_jurusan
                  INNER JOIN status ON status.id = data.id_status
                  WHERE santri.nilai <= 80 ORDER BY santri.nilai DESC";
        $show = $this->connect->prepare($query);
        $show->execute();
        $result = $show->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $key => $data) {
            print_r($data);
        }
    }
}

$datasantri = new connectpdo();
$kondisi = true;
while ($kondisi) {
    echo "========================================\n";
    echo "menu data santri\n";
    echo "----------------------------------------\n";
    echo "1. tampilkan data santri\n";
    echo "2. input data santri\n";
    echo "3. hitung jumlah data santri\n";
    echo "4. nilai rata-rata santri\n";
    echo "5. nilai santri diatas 80\n";
    echo "6. nilai santri kurang dari sama dengan 65\n";
    echo "========================================\n";
    echo "mau pilih input menu keberapa : ";
    $menu = trim(fgets(STDIN));
    switch ($menu) {
        case 1:
            $datasantri->datasantri();
        break;
        case 2:
            $datasantri->inputsantri();
        break;
        case 3:
            $datasantri->hitungdata();
        break;
        case 4:
            $datasantri->meannilai();
        break;
        case 5:
            $datasantri->nilaitinggi();
        break;
        case 6:
            $datasantri->nilairendah();
        break;
    
        default:
            echo "input salah atau tidak ada";
        break;
    }
    echo "Apakah Anda ingin ke menu input lagi? pilih => (y/n)"." = ";
    $pilih = trim(fgets(STDIN));
    if($pilih == 'n') {
        $kondisi = false;
    }
}
<?php
class Perpustakaan 
{
public $daftarbuku =[
        [   "judul" => "bulughul maram",
            "isbn" => "2412-1999"
        ],
        [
            "judul" => "Riyadhus Sholihin",
            "isbn" => "0520-1997"
        ],
        [
            "judul" => "Hadis Arbain",
            "isbn" => "0518-2001"
        ]
    ];


    public function judulbuku()
    {
    foreach ($this->daftarbuku as $key => $value) 
        { 
            return($this->daftarbuku);
        }
    }

    public function dipilih($buku)
    {
        foreach ($this->daftarbuku as $key) {
            return($this->daftarbuku[$buku]);
    }
    }

    public function meminjam($buku)
    {
        unset($this->daftarbuku[$buku]);
        return $this->daftarbuku;
    }
}

$perpustakaan = new Perpustakaan ();
echo "Daftar Buku Perpustakaan : " . "\n";
print_r($perpustakaan->judulbuku());

echo "=> Pilih Nomor : " . "\n";
$buku = trim(fgets(STDIN));

echo"=> Buku yang dipilih : " . "\n";
print_r ($perpustakaan->dipilih($buku));

echo "=> Sisa Buku : " . "\n";
print_r ($perpustakaan->meminjam($buku));
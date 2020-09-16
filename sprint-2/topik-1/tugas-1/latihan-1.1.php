<?php
class Perpustakaan 
{
    protected $buku =
    [
        [   "judul" => "Bulughul Maram",
            "isbn" => "1224-1999"
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
    public $pengunjung =
    [
        [   "nama" => "Dzul Maarij",
            "id" => "2412"
        ],
        [
            "nama" => "Fauzil Azim",
            "id" => "2005"
        ],
        [
            "nama" => "Muhammad Ridho",
            "id" => "1805"
        ]
    ];

    public function daftar_buku()
    {
        echo "==========DAFTAR BUKU=========="."\n";
        print_r($this->buku);
    }

    public function data_pengunjung()
    {
        echo "==========DATA PENGUNJUNG=========="."\n";
        print_r($this->pengunjung);
    }

    public function pinjam_buku()
    {
        echo "==========YANG MEMINJAM BUKU==========";
        echo "\n";
        foreach ($this->pengunjung as $key => $value)
        {
            echo "pengunjung = " .$this->pengunjung [$key]["nama"];
            echo "\n";
        }
        foreach ($this->buku as $key => $value)
        {
            echo "pinjam = " .$this->buku [$key]["judul"];
            echo "\n";

        }   
    }
}

$perpustakaan = new Perpustakaan();
$perpustakaan->daftar_buku();
$perpustakaan->data_pengunjung();
$perpustakaan->pinjam_buku();
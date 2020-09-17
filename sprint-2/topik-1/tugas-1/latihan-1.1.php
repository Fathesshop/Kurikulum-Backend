<?php
// class Perpustakaan 
// {
//     protected $buku =
//     [
//         [   "judul" => "Bulughul Maram",
//             "isbn" => "1224-1999"
//         ],
//         [
//             "judul" => "Riyadhus Sholihin",
//             "isbn" => "0520-1997"
//         ],
//         [
//             "judul" => "Hadis Arbain",
//             "isbn" => "0518-2001"
//         ]
//     ];
//     public $pengunjung =
//     [
//         [   "nama" => "Dzul Maarij",
//             "id" => "2412"
//         ],
//         [
//             "nama" => "Fauzil Azim",
//             "id" => "2005"
//         ],
//         [
//             "nama" => "Muhammad Ridho",
//             "id" => "1805"
//         ]
//     ];

//     public function daftar_buku()
//     {
//         echo "==========DAFTAR BUKU=========="."\n";
//         print_r($this->buku);
//     }

//     public function data_pengunjung()
//     {
//         echo "==========DATA PENGUNJUNG=========="."\n";
//         print_r($this->pengunjung);
//     }

//     public function pinjam_buku()
//     {
//         echo "==========YANG MEMINJAM BUKU==========";
//         echo "\n";
//         foreach ($this->pengunjung as $key => $valueue)
//         {
//             echo "pengunjung = " .$this->pengunjung [$key]["nama"];
//             echo "\n";
//         }
//         foreach ($this->buku as $key => $valueue)
//         {
//             echo "pinjam = " .$this->buku [$key]["judul"];
//             echo "\n";

//         }   
//     }
// }

// $perpustakaan = new Perpustakaan();
// $perpustakaan->daftar_buku();
// $perpustakaan->data_pengunjung();
// $perpustakaan->pinjam_buku();
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
            echo "$key. " .$value["judul"] . "\n";
        }
    }

    public function dipilih($buku)
    {
        foreach ($this->daftarbuku[$buku] as $key) {
            return($this->daftarbuku[$buku]);
    }
    }

    public function meminjam($buku)
    {
        unset($this->daftarbuku[$buku]);
        return $this->daftarbuku;
    }
    public function kembali($buku)
    {
        
        return isset($this->daftarbuku);
    }
}

$perpustakaan = new Perpustakaan ();
echo "Daftar Buku Perpustakaan : " . "\n";
echo $perpustakaan->judulbuku();

echo "=> Pilih Nomor : " . "\n";
$buku = trim(fgets(STDIN));

echo"=> Buku yang dipilih : " . "\n";
print_r ($perpustakaan->dipilih($buku));
$pilih = $perpustakaan->dipilih($buku);
echo"\n";

echo "=> Sisa Buku : " . "\n";
print_r ($perpustakaan->meminjam($buku));

// echo "Ingin kembalikan buku? Y/N" . "\n";
// $kembali =  trim(fgets(STDIN));
// switch ($kembali) {
//     case "y":
//         print_r($perpustakaan->kembali);
//         break;
//     case "n":
//         print_r($perpustakaan->meminjam($buku));
//         break;
//     default:
//         echo "input anda salah!!!";
//         break;
// }
// if ($kembali = "y") {
//     print_r($perpustakaan->pengembalian($pilih));
// } 
// else ($kembali = "n") {
//     print_r($perpustakaan->meminjam($buku));
// };
<?php
class Register 
{
public static $student =
[
    [
        "name" => "Arief",
        "nik"  => "TOO1"
    ],
    [
        "name" => "Ridho",
        "nik"  => "TOO2"
    ],
    [
        "name" => "Fauzil",
        "nik"  => "TOO3"
    ],
    [
        "name" => "Nasrul",
        "nik"  => "TOO4"
    ],
    [
        "name" => "Rahmat",
        "nik"  => "TOO5"
    ]
];


    public function __Construct()
    {
    foreach (self::$student as $key => $value) 
        { 
            echo "Daftar santri baru : " . "\n";
            return print_r(self::$student);
        }
    }

    public function dihapus($hapus)
    {
        foreach (self::$student as $key) {
            return(self::$student[$hapus]);
    }
    }

    public function delete($hapus)
    {
        unset(self::$student[$hapus]);
        return self::$student;
    }

    public function ditambah($tambah)
    {
        foreach (self::$student as $key)
        {
            return(self::$student[$tambah]);
        }
    }

    public function add($tambah)
    {
        array_push(self::$student[$tambah]);
        return self::$student;
    }
}

$Register = new Register ();

echo "Pilih Nomor : " . "\n";
echo "1. delete santri" . "\n";
echo "2. tambah santri" . "\n";
$input = trim(fgets(STDIN));
switch ($input) 
{
    case 1:
        echo "Pilih Nomor : " . "\n";
        $hapus = trim(fgets(STDIN));

        echo"Santri yang mau di delete : " . "\n";
        print_r ($Register->dihapus($hapus));

        echo "Sisa daftar santri baru : " . "\n";
        print_r ($Register->delete($hapus));
    break;
    case 2:
        echo "Pilih Nomor : " . "\n";
        $tambah = trim(fgets(STDIN));

        echo"Santri yang mau di dikembalikan : " . "\n";
        print_r ($Register->ditambah($tambah));

        echo "Sisa daftar santri baru : " . "\n";
        print_r ($Register->add($tambah));

    break;
    
    default:
        echo "input yang anda masukkan salah" . "\n";
    break;
}
echo "BELUM BISA  BUAT PROGRAM KEMBALI KE MENU INPUT MAS SHUFYAN :D" ."\n";
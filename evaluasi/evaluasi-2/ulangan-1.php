<?php
class Register 
{
public static $student =
[
    [
        "name" => "Muhammad",
        "nik"  => "TOO1"
    ],
    [
        "name" => "Dzulmaarij",
        "nik"  => "TOO2"
    ]
];
    public function __Construct()
    {
    foreach (self::$student as $key => $value) 
        { 
            echo "========== Data daftar santri baru : ==========" . "\n";
            return print_r(self::$student);
        }
    }

    public function update()
    {
        for ($i=0; $i < count(self::$student); $i++) 
        { 
            echo "\n $i => " . "NIK: ".self::$student[$i]['nik'] . " " ."Nama: ".self::$student[$i]['name'];
        }
        echo "\nPilih input data yang mau diupdate : ";
        $update = (int) trim(fgets(STDIN));
        if ($update >= count(self::$student)) {
            echo "input data tidak ada \n";
        }
        else
        {
            echo "ubah nama : ";
            self::$student[$update]['name'] = trim(fgets(STDIN));;
            echo "ubah NIK : ";
            self::$student[$update]['nik'] = trim(fgets(STDIN));;
            print_r(self::$student);
        }
    }

    public function delete($hapus)
    {
        unset(self::$student[$hapus]);
        return self::$student;
    }

    public function add($name, $nik)
    {
        $nomor = count(self::$student);
        self::$student[$nomor]['name'] = $name;
        self::$student[$nomor]['nik'] = $nik;
        print_r(self::$student);
    }
}
$Register = new Register ();
$kondisi = true;
while ($kondisi) 
{   echo "====================\n";
    echo "Pilih Nomor : \n";
    echo "1. Update Data santri : \n";
    echo "2. delete data santri : \n";
    echo "3. tambah data santri : \n";
    echo "====================\n";
    $input = trim(fgets(STDIN));
    switch ($input) 
    {
        case 1:
            print_r ($Register->update());
        break;
        
        case 2:
            echo "Pilih Nomor input data santri yang mau di delete : ";
            $hapus = trim(fgets(STDIN));
            echo "\n========== Sisa data daftar santri baru : ========== \n";
            print_r ($Register->delete($hapus));
        break;

        case 3:
            echo "Masukkan Nama Santri Baru : ";
            $name = trim(fgets(STDIN));
            echo "Masukkan NIK santri baru : ";
            $nik = trim(fgets(STDIN));
            echo "\n========== daftar data santri baru terbaru : ==========\n";
            print_r ($Register->add($name, $nik));
        break;
        default:
            echo "========== input yang anda masukkan salah =========\n";
        break;
    }
        echo "Apakah Anda masih ingin input data? pilih => (y/n)"." = ";
        $pilih = trim(fgets(STDIN));
        if($pilih == 'n')
        {
            $kondisi = false;
        }
}
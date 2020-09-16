<?php
class Lingkaran
{
    public static $phi;
    public static $jari_jari;
    
    public function __construct($phi,$jari_jari)
    {
        self::$phi = $phi;
        self::$jari_jari = $jari_jari;
    }
    public static function luaslingkaran()
    {
        return self::$phi * (self::$jari_jari**2);
    }
    public static function kelilinglingkaran()
    {
        return 2*self::$phi * self::$jari_jari;
    }

}
class Trapesium
{
    public static $alas_atas;
    public static $alas_bawah;
    public static $tinggi;

    public function __construct($alas_atas,$alas_bawah,$tinggi)
    {
        self::$alas_atas = $alas_atas;
        self::$alas_bawah = $alas_bawah;
        self::$tinggi = $tinggi;
    }

    public static function luastrapesium()
    {
        return ((self::$alas_atas + self::$alas_bawah)*self::$tinggi)/2;
    }

}
echo "========================================\n";
echo "||    MAU HITUNG BANGUN DATAR APA :   ||\n";
echo "========================================\n";
echo "||    1. keliling dan luas lingkaran  ||\n";
echo "||    2. luas trapesium               ||\n";
echo "========================================\n";
echo "== note-> masukkan input dengan angka ==\n";
echo "========================================\n";
echo "input yang dipilih : ".$pilih = trim(fgets(STDIN)). "\n";
switch ($pilih) {
    case 1:
        $phi = 3.14;
        echo "masukkan jari-jari lingkaran : ";
        $jari_jari = trim(fgets(STDIN));
        try {
            if ($jari_jari <= 0) {
                throw new ErrorDataNotValid("Angka tidak boleh 0 (NOL)!!!!"."\n"); 
            } else {
                $hasillingkaran = new Lingkaran($phi,$jari_jari);
                echo "input benar ! Luas lingkaran adalah : " . Lingkaran::luaslingkaran() . "cm"."\n";
                echo "input benar ! keliling lingkaran adalah : " . Lingkaran::kelilinglingkaran() . "cm"."\n";
            }
        } catch (ErrorDataNotValid $error)
        {
            echo $error->getMessage();
            echo "Error pada ".__FILE__." baris ke : ". $error->getLine()."\n";
        }
        // $hasillingkaran = new Lingkaran($phi,$jari_jari);
        // echo "Luas lingkaran adalah : " .Lingkaran::luaslingkaran(). "cm"."\n";
        // echo "keliling lingkaran adalah : " .Lingkaran::kelilinglingkaran(). "cm"."\n";
        break;
    case 2:
        echo "masukkan alas atas trapesium : ";
        $alas_atas = trim(fgets(STDIN));
        echo "masukkan alas bawah trapesium : ";
        $alas_bawah = trim(fgets(STDIN));
        echo "masukkan tinggi trapesium : ";
        $tinggi = trim(fgets(STDIN));
        try {
            if ($alas_atas <= 0 || $alas_bawah <= 0 || $tinggi <= 0) {
                throw new ErrorDataNotValid("Angka tidak boleh 0 (NOL)!!!!"."\n"); 
            } else {
                $hasiltrapesium = new Trapesium($alas_atas,$alas_bawah,$tinggi);
                echo "input benar ! Luas trapesium adalah  : " . Trapesium::luastrapesium() . "cm"."\n";
            }
        } catch (ErrorDataNotValid $error)
        {
            echo $error->getMessage();
            echo "Error pada ".__FILE__." baris ke : ". $error->getLine()."\n";
        }
        // $hasiltrapesium = new Trapesium($alas_atas,$alas_bawah,$tinggi);
        // echo "Luas trapesium adalah : " .Trapesium::luastrapesium(). "cm"."\n";
        break;
    default:
        echo "pilihan anda tidak ada!!!"."\n";
        break;
}
class ErrorDataNotValid extends Exception{}
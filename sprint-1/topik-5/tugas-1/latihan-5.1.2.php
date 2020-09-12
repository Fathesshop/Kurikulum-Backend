<?php
//luas segitiga
// function calcRectangleArea($alas, $tinggi)
// {
//     $luas_segitiga = ($alas * $tinggi) /2;
//     return $luas_segitiga;
// }

// echo "masukkan alas segitiga : ";
// $alas = trim(fgets(STDIN));
// echo "masukkan tinggi segitiga : ";
// $tinggi = trim(fgets(STDIN));
// echo "luas segitiga : ". calcRectangleArea($alas, $tinggi) ."\n";

//luas lingkaran
// function calcRectangleArea($jari_jari)
// {
//     $luas_lingkaran = 3.14 * ($jari_jari**2);
//     return $luas_lingkaran;
// }
// echo "masukkan jari-jari lingkaran : ";
// $jari_jari = trim(fgets(STDIN));
// echo "luas lingkaran : ". calcRectangleArea($jari_jari)."\n";


function calcRectangleArea($sisi_a, $sisi_b, $t)
{
    $luas_trapesium = ($sisi_a + $sisi_b) * $t / 2;
    return $luas_trapesium;
}
echo "masukkan sisi a (pertama) trapesium : ";
$sisi_a = trim(fgets(STDIN));
echo "masukkan sisi b (kedua) trapesium : ";
$sisi_b = trim(fgets(STDIN));
echo "masukkan tinggi trapesium : ";
$t = trim(fgets(STDIN));
echo "luas trapesium : ". calcRectangleArea($sisi_a, $sisi_b, $t)."\n";
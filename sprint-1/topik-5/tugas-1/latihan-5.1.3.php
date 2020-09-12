<?php
function calcRectangleArea($larik)
{
    $nilai_larik = ($larik) * 3;
    return $larik;
}

echo "masukkan jumlah larik : ";
$jumlah = trim(fgets(STDIN));
for ($i = 0; $i < $jumlah; $i++)

{
    echo "masukkan angka larik yang mau diubah : ";
    $larik[] = trim(fgets(STDIN));
}
print_r($larik);

echo "hasil perubahan larik : ". array($larik)."\n";

<?php
//input dinamis
echo "masukkan jumlah : ";
$jumlah = trim(fgets(STDIN));
for ($i = 0; $i < $jumlah; $i++)

{
    echo "masukkan angka : ";
    $angka[] = trim(fgets(STDIN));
}
print_r($angka);

//nilai tertinggi
rsort($angka);
for ($i=0; $i < 3; $i++) 
{
    $maks[] = $angka[$i];
}
echo "nilai tertinggi : ";
print_r($maks);

//nilah terendah
sort($angka);
for ($i=0; $i < 3; $i++)
{
    $min[] = $angka[$i];
}
echo "nilai terendah : ";
print_r($min);
<?php
function calcRectangleArea($larik)
{
    foreach($larik as $key => $value)
    {
    $larik[$key]*=3;
    }
    return $larik;
}
echo "masukkan jumlah angka : ";
$jumlah = trim(fgets(STDIN));
for($i=1; $i<=$jumlah; $i++)
{
    echo "masukkan angka ke-".$i." : ";
    $angka[] = trim(fgets(STDIN));
}   
print_r(calcRectangleArea($angka));
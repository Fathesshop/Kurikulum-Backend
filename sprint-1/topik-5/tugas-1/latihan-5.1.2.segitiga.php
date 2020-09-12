<?php
function calcRectangleArea($alas, $tinggi):int
{
    return ($alas * $tinggi) /2;
}

echo "masukkan alas segitiga : ";
$alas = trim(fgets(STDIN));
echo "masukkan tinggi segitiga : ";
$tinggi = trim(fgets(STDIN));
echo "luas segitiga : ". calcRectangleArea($alas, $tinggi) ."\n";
<?php
// luas persegi
function calcRectangleArea($lenght, $width)
{
    $luas_persegi = $lenght * $width;
    return $luas_persegi;
}

echo "masukkan panjang persegi : ";
$lenght = (int) trim(fgets(STDIN));
echo "masukkan lebar persegi : ";
$width = (int) trim(fgets(STDIN));
echo "luas persegi : ". calcRectangleArea($lenght, $width) ."\n";

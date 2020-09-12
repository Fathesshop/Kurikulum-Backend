<?php
$calcRectangleArea = function ($lenght, $width):int
{
    return $lenght * $width;
};

echo "masukkan panjang persegi : ";
$lenght = trim(fgets(STDIN));
echo "masukkan lebar persegi : ";
$width =  trim(fgets(STDIN));

echo "luas persegi : ". $calcRectangleArea($lenght,$width) ."\n";

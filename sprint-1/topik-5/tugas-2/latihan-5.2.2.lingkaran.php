<?php
$calcRectangleArea = function ($jari_jari):int
{
    return 3.14 * ($jari_jari**2);
};

echo "masukkan jari-jari lingkaran : ";
$jari_jari = trim(fgets(STDIN));

echo "luas lingkaran : ". $calcRectangleArea($jari_jari)."\n";
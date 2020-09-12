<?php
function calcRectangleArea($sisi_a, $sisi_b, $t):int
{
    return ($sisi_a + $sisi_b) * $t / 2;
}
echo "masukkan sisi a (pertama) trapesium : ";
$sisi_a = trim(fgets(STDIN));
echo "masukkan sisi b (kedua) trapesium : ";
$sisi_b = trim(fgets(STDIN));
echo "masukkan tinggi trapesium : ";
$t = trim(fgets(STDIN));
echo "luas trapesium : ". calcRectangleArea($sisi_a, $sisi_b, $t)."\n";
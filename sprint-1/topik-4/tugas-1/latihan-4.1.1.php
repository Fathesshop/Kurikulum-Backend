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

//mean
$r = count($angka);
$rata_rata = array_sum ($angka) / $r;
echo "mean nya = ".$rata_rata. "\n";

//median
sort ($angka);
$m = round($r / 2);
$t = $angka[$m-1];
// echo "mediannya nya = ".$m. "\n";
echo "mediannya nya = ".$t. "\n";

//modus
$p = array_count_values($angka);
arsort ($p);
foreach($p as $k => $v)
{
    if($v==max($p))
    {
        echo "modusnya nya = ".$k." "."dengan banyak data = ".$v."\n";
    }
}
<?php
$input = 5956560159466056;
$output = explode("0",$input);
foreach ($output as $key => $value) {
    $larik[] = str_split($output[$key]);
    sort ($larik[$key]);
}
$hasil = array_merge(...$larik);
print_r($larik);
print_r($hasil);
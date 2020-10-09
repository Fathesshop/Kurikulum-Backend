<?php
namespace ruang\segitiga;
class segitiga {
    public function keliling($alas) {
        return $alas * 3;
    }

    public function luas($alas,$tinggi) {
        return ($alas * $tinggi) / 2;
    }
}
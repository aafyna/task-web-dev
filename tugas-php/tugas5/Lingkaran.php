<?php
require_once 'Bentuk2D.php';

class Lingkaran extends Bentuk2D{
    static $jari = 7;

    public function namaBidang(){
        echo 'Lingkaran';
    }

    public function luasBidang(){
        $jari = Lingkaran::$jari;
        $luas = 3.14 * $jari * $jari;
        echo $luas;
    }

    public function kelilingBidang(){
        $jari = Lingkaran::$jari;
        $keliling = 2 * 3.14 * $jari;
        echo $keliling;
    }

    public function keterangan(){
        echo 'Jari-jari: '.self::$jari;
    }
}
?>
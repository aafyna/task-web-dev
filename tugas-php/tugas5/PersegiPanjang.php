<?php
require_once 'Bentuk2D.php';

class PersegiPanjang extends Bentuk2D{
    static $panjang = 10;
    static $lebar = 5;

    public function namaBidang(){
        echo 'Persegi Panjang';
    }

    public function luasBidang(){
        $panjang = self::$panjang;
        $lebar = self::$lebar;
        $luas = $panjang * $lebar;
        echo $luas;
    }

    public function kelilingBidang(){
        $panjang = self::$panjang;
        $lebar = self::$lebar;
        $keliling = 2 * ($panjang + $lebar);
        echo $keliling;
    }

    public function keterangan(){
        echo 'Panjang: '.self::$panjang;
        echo '<br>Lebar: '.self::$lebar;
    }
}
?>
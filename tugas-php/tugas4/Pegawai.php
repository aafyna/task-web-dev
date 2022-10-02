<?php
class Pegawai{
    public $nim, $nama, $jabatan, $agama, $status;
    public $gajiPokok, $zakatProfesi;
    const CORP = 'PT. Jaya Maju Indah';

    public function __construct($nim, $nama, $jabatan, $agama, $status){
        $this->nim = $nim;
        $this->pegawai = $nama;
        $this->jabatan = $jabatan;
        $this->agama = $agama;
        $this->status = $status;
        
    }

    public function setGajiPokok($jabatan){
        $this->jabatan = $jabatan;
        switch ($jabatan){
            case "Manajer" : $gajiPokok = 15000000; break;
            case "Asisten Manajer" : $gajiPokok = 10000000; break;
            case "Kepala Bagian" : $gajiPokok = 17000000; break;
            case "Staff" : $gajiPokok = 4000000; break;
            default: $gajiPokok = 0; break;
        }
        return $gajiPokok;
    }

    public function setTunjab($gajiPokok){
        $this->gajiPokok = $gajiPokok;
        $tunjab = 0.2 * $this->setGajiPokok($this->jabatan);
        return $tunjab;
    }

    public function setTunkel($status){
        $this->status = $status;
        $tunkel = ($status == 'Menikah') ? 0.1 * $this->setGajiPokok($this->jabatan) : 0;
        // $tunkel = 0.1 * $this->setGajiPokok($this->jabatan);
        return $tunkel;
    }

    public function setZakatProfesi($agama){
        $gajiPokok = $this->setGajiPokok($this->jabatan);
        $tunjab = $this->setTunjab($this->gajiPokok);
        $tunkel = $this->setTunkel($this->status);
        $gajiKotor = $gajiPokok + $tunjab + $tunkel;

        if($agama == "Islam" && $gajiKotor >= 6000000){
            $zakatProfesi = 0.025 * $gajiPokok;
            }else{
                $zakatProfesi = 0;
        } 
        return $zakatProfesi;
    }

    public function setGajiBersih($zakatProfesi){
        $gajiPokok = $this->setGajiPokok($this->jabatan);
        $tunjab = $this->setTunjab($this->gajiPokok);
        $tunkel = $this->setTunkel($this->status);
        $zakatProfesi = $this->setZakatProfesi($this->agama);
        $gajiKotor = $gajiPokok + $tunjab + $tunkel;

        $gajiBersih = $gajiKotor - $zakatProfesi;
        return $gajiBersih;
    }

    public function mencetak(){
        echo '<b><u>'.self::CORP.'</u></b>';
        echo '<br/>Nim: '.$this->nim;
        echo '<br/>Nama Pegawai: '.$this->pegawai;
        echo '<br/>Jabatan: '.$this->jabatan;
        echo '<br/>Agama: '.$this->agama;
        echo '<br/>Status: '.$this->status;
        echo '<br/>Gaji Pokok: '.number_format($this->setGajiPokok($this->jabatan), 2, ',','.') ;
        echo '<br/>Tunjangan Jabatan: '.number_format($this->setTunjab($this->gajiPokok), 2, ',','.');
        echo '<br/>Tunjangan Keluarga: '.number_format($this->setTunkel($this->status), 2, ',','.');
        echo '<br/>Zakat Profesi: '.number_format($this->setZakatProfesi($this->agama), 2, ',','.') ;
        echo '<br/>Gaji Bersih: '.number_format($this->setGajiBersih($this->zakatProfesi), 2, ',','.') ;
        echo '<hr/>';
    }
}


?>
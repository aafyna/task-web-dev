<?php
require 'Pegawai.php';
$p1 = new Pegawai('112', 'Syarifah', 'Manajer', 'Islam', 'Menikah');
$p2 = new Pegawai('122', 'Dianirda', 'Asisten Manajer', 'Islam', 'Menikah');
$p3 = new Pegawai('132', 'Asnawi', 'Kepala Bagian', 'Islam', 'Belum Menikah');
$p4 = new Pegawai('154', 'Fredy', 'Staff', 'Kristen', 'Menikah');
$p5 = new Pegawai('141', 'Dinosi', 'Staff', 'Kristen', 'Belum Menikah');

$p1->mencetak();
$p2->mencetak();
$p3->mencetak();
$p4->mencetak();
$p5->mencetak();
?>
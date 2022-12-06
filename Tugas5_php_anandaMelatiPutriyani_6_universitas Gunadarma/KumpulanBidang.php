<?php
require_once 'Bentuk2D.php';
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'Segitiga.php';

$lingkaran = new Lingkaran(5);
$persegipanjang = new PersegiPanjang(10, 5);
$segitiga = new Segitiga(10, 12);

$kumpulan_bidang = [$lingkaran, $persegipanjang, $segitiga];

foreach ($kumpulan_bidang as $hasil)
{
    echo "<br/> Nama Bidang: ", $hasil->namaBidang();
    echo "<br/> Luas Bidang: ", $hasil->luasBidang();
    echo "<br/> Keliling Bidang: ", $hasil->kelilingBidang();
}

?>
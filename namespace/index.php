<?php

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

// $produk2 = new Game("Ultraman", "Tsuburaya Productions", "Tsuburaya Productions", 20000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();
// echo "<br>";
// new App\Service\User();

use App\Service\User as ServiceUser;

new ServiceUser();

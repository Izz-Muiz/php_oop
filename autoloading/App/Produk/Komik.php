<?php

class Komik extends Produk implements InfoProduk
{
    public $halaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $halaman);
        $this->halaman = $halaman;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (RM {$this->harga})";
        return $str;
    }
    public function getInfoProduk()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->halaman} Halaman.";
        return $str;
    }
}

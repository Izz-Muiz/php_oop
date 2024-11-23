<?php

class Game extends Produk implements InfoProduk
{
    public $waktu;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktu)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktu);
        $this->waktu = $waktu;
    }
    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (RM {$this->harga})";
        return $str;
    }
    public function getInfoProduk()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->waktu} Jam.";
        return $str;
    }
}

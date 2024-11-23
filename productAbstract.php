<?php

abstract class Product
{
    private $judul, $penulis, $penerbit, $harga; // all class can use this
    protected $discount = 0; // only this and inheritance class can use this
    // private ; // only this class can use this

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul)
    {
        $this->judul = $judul;
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }
    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    public function getJudul()
    {
        return $this->judul;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->discount / 100);
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduct();

    public function getInfo()
    {
        $str = "{$this->judul} | {$this->getLabel()} (RM {$this->harga})";
        return $str;
    }
}

class Komik extends Product
{
    public $halaman;
    public function __construct($judul, $penulis, $penerbit, $harga, $halaman)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $halaman);
        $this->halaman = $halaman;
    }
    public function getInfoProduct()
    {
        $str = "Komik : " . $this->getInfo() . " - {$this->halaman} Halaman.";
        return $str;
    }
}

class Game extends Product
{
    public $waktu;
    public function __construct($judul, $penulis, $penerbit, $harga, $waktu)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga, $waktu);
        $this->waktu = $waktu;
    }
    public function getInfoProduct()
    {
        $str = "Game : " . $this->getInfo() . " - {$this->waktu} Jam.";
        return $str;
    }
}


class CetakInfoProduct
{
    public $daftarProduct = [];
    public function tambahProduct(Product $product)
    {
        $this->daftarProduct[] = $product;
    }
    public function cetak()
    {
        $str = "DAFTAR PRODUK : <br>";
        foreach ($this->daftarProduct as $product) {
            $str .= "- {$product->getInfoProduct()} <br>";
        }
        return $str;
    }
}

$product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$product2 = new Game("Ultraman", "Tsuburaya Productions", "Tsuburaya Productions", 20000, 50);

$cetakProduct = new CetakInfoProduct();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);

echo $cetakProduct->cetak();

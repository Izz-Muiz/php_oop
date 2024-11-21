<?php

class Product
{
    public $judul, $penulis, $penerbit; // all class can use this
    protected $discount = 0; // only this and inheritance class can use this
    private $harga; // onlu this class can use this

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
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

    public function getInfoProduct()
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
        $str = "Komik : " . parent::getInfoProduct() . " - {$this->halaman} Halaman.";
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
        $str = "Game : " . parent::getInfoProduct() . " - {$this->waktu} Jam.";
        return $str;
    }
}


// class CetakInfoProduct
// {
//     public function cetak(Product $product)
//     {
//         $str = "{$product->judul} | {$product->getLabel()} (RM {$product->harga})";
//         return $str;
//     }
// }

$product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);

$product2 = new Game("Ultraman", "Tsuburaya Productions", "Tsuburaya Productions", 20000, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();

echo "<hr>";

$product2->setDiscount(50);
echo $product2->getHarga();

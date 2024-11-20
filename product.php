<?php



class Product
{
    public $judul, $penulis, $penerbit, $harga, $halaman, $waktu;

    public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $waktu)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduct()
    {
        $str = "{$this->jenis} : {$this->judul} | {$this->getLabel()} (RM {$this->harga})";
        return $str;
    }
}


class Komik extends Product
{
    public function getInfoProduct()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()} (RM {$this->harga}) - {$this->halaman} Halaman.";
        return $str;
    }
}

class Game extends Product
{
    // public $jmlHalaman;
    public function getInfoProduct()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()} (RM {$this->harga}) - {$this->waktu} Jam.";
        return $str;
    }
}


class CetakInfoProduct
{
    public function cetak(Product $product)
    {
        $str = "{$product->judul} | {$product->getLabel()} (RM {$product->harga})";
        return $str;
    }
}

$product1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);

$product2 = new Game("Ultraman", "Tsuburaya Productions", "Tsuburaya Productions", 20000, 0, 50);

echo $product1->getInfoProduct();
echo "<br>";
echo $product2->getInfoProduct();

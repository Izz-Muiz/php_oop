<?php



class Product
{
    public $judul, $penulis, $penerbit, $harga, $halaman, $waktu, $jenis;

    public function __construct($judul, $penulis, $penerbit, $harga, $halaman, $waktu, $jenis)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->halaman = $halaman;
        $this->waktu = $waktu;
        $this->jenis = $jenis;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoLengkap()
    {
        $str = "{$this->jenis} : {$this->judul} | {$this->getLabel()} (RM {$this->harga})";
        if ($this->jenis == "Komik") {
            $str .= " - {$this->halaman} Halaman.";
        } else if ($this->jenis == "Game") {
            $str .= " - {$this->waktu} Jam";
        }
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

$product1 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");

$product2 = new Product("Ultraman", "Tsuburaya Productions", "Tsuburaya Productions", 20000, 0, 50, "Game");

echo $product1->getInfoLengkap();
echo "<br>";
echo $product2->getInfoLengkap();

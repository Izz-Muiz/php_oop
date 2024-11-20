<?php



class Product
{
    public $judul, $penulis, $penerbit, $harga;

    public function __construct($judul, $penulis, $penerbit, $harga)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
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

$product3 = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);

$product4 = new Product("Ultraman", "Tsuburaya Productions", "Tsuburaya Productions", 20000);

echo "Komik : " . $product3->getLabel();
echo "<br>";
echo "Movie : " . $product4->getLabel();

echo "<br>";
$infoProduct1 = new CetakInfoProduct();
echo $infoProduct1->cetak($product3);

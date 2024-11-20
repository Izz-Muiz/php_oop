<?php



class Product
{
    public $judul, $penulis, $penerbit, $harga;

    public function getLabel()
    {
        return "$this->judul oleh $this->penulis";
    }
}

// $product1 = new Product();
// $product1->judul = "Harry Potter";
// var_dump($product1);


// $product2 =  new Product();
// $product2->judul = "Boruto";
// var_dump($product2);

$product3 = new Product();
$product3->judul = "Naruto";
$product3->penulis = "Masashi Kishimoto";
$product3->penerbit = "Shonen Jump";
$product3->harga = 30000;

echo "<hr>";
$product4 = new Product();
$product4->judul = "Ultraman";
$product4->penulis = "Tsuburaya Productions";
$product4->penerbit = "Tsuburaya Productions";
$product4->harga = 20000;

echo "Komik : " . $product3->getLabel();
echo "<br>";
echo "Movie : " . $product4->getLabel();

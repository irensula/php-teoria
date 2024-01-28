<?php

//demotehtävä 1

class Product {
    public $name;
    public $author;
    public $price;
    public $pages;

    // constructor
    public function __construct($name, $author, $price, $pages) {
        $this->name = $name; 
        $this->author = $author;
        $this->price = $price;
        $this->pages = $pages;
    }

    // name
    function setName($name) {
        $this->name = $name;
    }
    function getName() {
        return $this->name;
    }
    // author
    function setAuthor($author) {
        $this->author = $author;
    }
    function getAuthor() {
        return $this->author;
    }
    // price
    function setPrice($price) {
        $this->price = $price;
    }
    function getPrice() {
        return $this->price;
    }
    // pages
    function setPages($pages) {
        $this->pages = $pages;
    }
    function getPages() {
        return $this->pages;
    }
    function available() {
        $isAvailable = true;
        if(!$isAvailable) {
            echo "Not available.";
        } else {
            echo "Available.";
        }
    }
}

//demotehtävä 2

$punainen_nosturi_keltainen_kuormuri = new Product('Punainen nosturi, keltainen kuormuri', 'Michelle Robinson', 15.90, 32);
// echo "Nimi: " . $punainen_nosturi_keltainen_kuormuri->getName() . ".\n";
echo "Kirjoittaja: " . $punainen_nosturi_keltainen_kuormuri->getAuthor() . ".\n";
// echo "Hinta: " . $punainen_nosturi_keltainen_kuormuri->getPrice() . ".\n";
// echo "Sivumäärä: " . $punainen_nosturi_keltainen_kuormuri->getPages() . ".\n";

$kanijengi_kaahaa = new Product('Kanijengi kaahaa', 'Philip Ardagh, Ben Mantle', 16.90, 32);
// echo "Nimi: " . $kanijengi_kaahaa->getName() . ".\n";
echo "Kirjoittaja: " . $kanijengi_kaahaa->getAuthor() . ".\n";
// echo "Hinta: " . $kanijengi_kaahaa->getPrice() . ".\n";
// echo "Sivumäärä: " . $kanijengi_kaahaa->getPages() . ".\n";


$kanijengi_veneilee = new Product('Kanijengi veneilee', 'Philip Ardagh, Ben Mantle', 19.90, 32);

// echo "Name: " . $kanijengi_veneilee->getName() . ".\n";
// echo "Kirjoittaja: " . $kanijengi_veneilee->getAuthor() . ".\n";
echo "Price: " . $kanijengi_veneilee->getPrice() . ".\n";
// echo "Number of pages: " . $kanijengi_veneilee->getPages() . ".\n";

?>
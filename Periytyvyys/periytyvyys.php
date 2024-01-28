<?php

    abstract class Loanable {
        protected $name;
        protected $available;
        protected $genre;

        public function __construct($name, $available, $genre){
            $this->name = $name;
            $this->available = $available;
            $this->genre = $genre;
        }

        public function getName() {
            return $this->name;
        }
        public function getAvailable() {
            return $this->available;
        }
        public function getGenre() {
            return $this->genre;
        }
        abstract public function tellType();
    }

    class Book extends Loanable {
        protected $author;
        protected $pages;
        protected $language;

        public function __construct($name, $available, $genre, $author, $pages, $language){
            parent::__construct($name, $available, $genre);
            $this->author = $author;
            $this->pages = $pages;
            $this->language = $language;
        }
        
        public function getAuthor() {
            return $this->author;
        }
        public function getPages() {
            return $this->pages;
        }
        public function getLanguage() {
            return $this->language;
        }
        public function tellType(){
            echo "This is a book.\n";
        }
    }

    class Dvd extends Loanable {
        protected $duration;
        protected $discsNumber;
        protected $country;

        public function __construct($name, $available, $genre, $duration, $discsNumber, $country){
            parent::__construct($name, $available, $genre);
            $this->duration = $duration;
            $this->discsNumber = $discsNumber;
            $this->country = $country;
        }
        
        public function getDuration() {
            return $this->duration;
        }
        public function getDiscsNumber() {
            return $this->discsNumber;
        }
        public function getCountry() {
            return $this->country;
        }
        public function tellType(){
            echo "This is a dvd.\n";
        }
    }

$lehtirosvo = new Book('Lehtirosvo', 'Available', 'children book', 'Alice Hemming, Nicola Slater', '32', 'suomi');

echo $lehtirosvo->getName();
echo $lehtirosvo->getAuthor() . "\n"; 
echo $lehtirosvo->getPages() . "\n"; 
$lehtirosvo->tellType();
    
$big_lebovski = new Dvd('Big Lebovski', 'Available', 'comedy, drama', '2:05', '1', 'USA');

echo $big_lebovski->getName() . "\n";
echo $big_lebovski->getDuration() . "\n";
echo $big_lebovski->getDiscsNumber() . "\n";
$big_lebovski->tellType();

?>
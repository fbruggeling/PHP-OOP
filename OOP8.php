<?php

class Product
{

    public $name;

    public $price;

    public $currency;

    public function __construct($price, $name, $currency = "€")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }

    public function getProduct()
    {
        return "Het Product " . $this->name . " kost " . $this->currency . " " . $this->price;
    }
}

$nummer1 = new Product(3, "leef", "€");
echo $nummer1->getProduct()."</br>";

$nummer2 = new Product(4, "blue", "€");
echo $nummer2->getProduct()."</br>";

$nummer3 = new Product(5, "titanium", "€");
echo $nummer3->getProduct()."</br>";



// echo $nummer1->name."</br>";
// echo $nummer1->currency;
// echo $nummer1->price."</br>";



var_dump($nummer1);
//var_dump($fruit2);

?>
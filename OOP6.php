<?php

class Product
{

    public $name;

    public $price;

    public $currency;


    public function __construct($price, $name = "Een fruitsoort", $currency = "€")
    {
        $this->name = ucfirst($name);
        $this->price = $price;
        $this->currency = $currency;
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
}

$fruit1 = new Product(price: 3, name: "elstar", currency: "$");
//$fruit1->setName("elstar")
//$fruit1->price = 3;


//$fruit2 = new Product();
//$fruit2->setName("jonagold");
//$fruit2->price = 3;


echo $fruit1->name."</br>";
echo $fruit1->currency;
echo $fruit1->price."</br>";
//echo $fruit1->formatPrice()."</br>";
//echo $fruit2->name."</br>";
//echo $fruit2->price."</br>";
//echo $fruit2->formatPrice()."</br>";


var_dump($fruit1);
//var_dump($fruit2);

?>
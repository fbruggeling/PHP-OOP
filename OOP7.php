<?php

class Product
{
    public function __construct(public $price, public $name, public $currency = "&euro")
    {
        $this->name = ucfirst($name);
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
}

$nummer1 = new Product(3, "leef", "$");



echo $nummer1->name."</br>";
echo $nummer1->currency;
echo $nummer1->price."</br>";



var_dump($nummer1);
//var_dump($fruit2);

?>
<?php

class Product
{

    public $name;

    public $price;

    public $fruit;

    public function setName($name)
    {
        $this->name = ucfirst($name);
    }

    public function setFruit($fruit)
    {
        $this->fruit = strtoupper($fruit);
    }

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
}

$fruit1 = new Product();
$fruit1->setName("elstar");
$fruit1->setFruit("appel");
$fruit1->price = 3;


$fruit2 = new Product();
$fruit2->setName("jonagold");
$fruit2->setFruit("appel");
$fruit2->price = 3;


echo $fruit1->name."</br>";
echo $fruit1->fruit."</br>";
echo $fruit1->price."</br>";
echo $fruit1->formatPrice()."</br>";
echo $fruit2->name."</br>";
echo $fruit2->fruit."</br>";
echo $fruit2->price."</br>";
echo $fruit2->formatPrice()."</br>";


var_dump($fruit1);
var_dump($fruit2);

?>
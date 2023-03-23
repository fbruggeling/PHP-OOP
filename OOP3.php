<?php

class Product
{

    public $ijs;

    public $price;

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
}

$cola = new Product();
$cola->ijs = "Ja";
$cola->price = 3;

$pepsi = new Product();
$pepsi->ijs = "Ja";
$pepsi->price = 3;

$sinas = new Product();
$sinas->ijs = "Ja";
$sinas->price = 3;

$sevenup = new Product();
$sevenup->ijs = "Nee";
$sevenup->price = 3;


echo $cola->ijs."</br>";
echo $cola->price."</br>";
echo $cola->formatPrice()."</br>";
echo $pepsi->ijs."</br>";
echo $pepsi->price."</br>";
echo $pepsi->formatPrice()."</br>";
echo $sinas->ijs."</br>";
echo $sinas->price."</br>";
echo $sinas->formatPrice()."</br>";
echo $sevenup->ijs."</br>";
echo $sevenup->price."</br>";
echo $sevenup->formatPrice();


var_dump($cola);
var_dump($sinas);
var_dump($pepsi);
var_dump($sevenup);
?>
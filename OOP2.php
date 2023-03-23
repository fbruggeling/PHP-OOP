<?php

class Product
{

    public $ijs = "Ja of nee";

}

$cola = new Product();
$cola->ijs = "Ja";

$pepsi = new Product();
$pepsi->ijs = "Ja";

$sinas = new Product();
$sinas->ijs = "Ja";

$sevenup = new Product();
$sevenup->ijs = "Nee";


echo $cola->ijs."</br>";
echo $pepsi->ijs."</br>";
echo $sinas->ijs."</br>";
echo $sevenup->ijs."</br>";

$sevenup->ijs = "ja";

echo $sevenup->ijs;

var_dump($cola);
var_dump($sinas);
var_dump($pepsi);
var_dump($sevenup);
?>
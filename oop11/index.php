<?php
declare(strict_types=1);

require_once 'music.php';

$song1 = new Music('Leef', 'pop', 3);

echo $song1->getName().'</br>';

var_dump($song1);
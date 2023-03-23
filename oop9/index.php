<?php

require_once 'music.php';

$song1 = new Music('Leef', ['pop', 'NL'], 3);

echo $song1->getName().'</br>';

var_dump($song1);
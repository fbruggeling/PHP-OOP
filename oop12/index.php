<?php
declare(strict_types=1);

require_once 'music.php';

$piet = new ListenList();

$song1 = new Music('Leef', 'pop', 3);
$song2 = new Music('bloed', 'pop', 1);

$piet->addSong($song1);
$piet->addSong($song2);

echo $song1->getName().'</br>';

var_dump($piet);
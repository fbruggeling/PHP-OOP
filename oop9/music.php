<?php

class Music
{
    public $name;

    public $genre;

    public $listened;

    /**
     * @param string $name
     * @param string $genre
     * @param int $listened
     */

    public function __construct($name, $genre, $listened)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->listened = $listened;
    }

    public function getName()
    {
        return $this->name;
    }
}
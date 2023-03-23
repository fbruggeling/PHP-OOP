<?php

class Music
{
    public string $name;

    public string $genre;

    public int $listened;

    public function __construct(string $name, string $genre, int $listened)
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
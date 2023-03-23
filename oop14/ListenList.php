<?php

class ListenList
{
    public array $songs = [];

    public function addSong($music)
    {
        $this->songs[] = $music;
    }
}
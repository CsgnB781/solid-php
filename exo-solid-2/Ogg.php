<?php

require_once 'Playable.php';

class Ogg implements Playable
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function listen()
    {
        return 'Lecture du fichier Ogg ' . $this->filename;
    }
}

<?php

require_once 'Playable.php';

class Mp3 implements Playable
{
    private $filename;

    public function __construct($filename)
    {
        $this->filename = $filename;
    }

    public function listen()
    {
        return 'Lecture du fichier Mp3 ' . $this->filename;
    }
}

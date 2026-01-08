<?php

class MusicReader
{
    private $player;

    public function __construct(Playable $player)
    {
        $this->player = $player;
    }

    public function listen()
    {
        return $this->player->listen();
    }
}

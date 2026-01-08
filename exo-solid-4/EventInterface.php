<?php

interface EventInterface
{
    public function name() : string;

    public function fields() : array;

    public function payload() : array;
}

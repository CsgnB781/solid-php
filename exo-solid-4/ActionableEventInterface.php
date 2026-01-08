<?php

require_once 'EventInterface.php';

interface ActionableEventInterface extends EventInterface
{
    public function action() : array;
}

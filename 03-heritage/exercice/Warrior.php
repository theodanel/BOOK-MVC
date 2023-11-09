<?php

class Warrior extends Character
{
    // protected $strength = 20;

    public function __construct($name)
    {
        parent::__construct($name);

        $this->strength *= 2;
    }
}

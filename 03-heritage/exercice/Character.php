<?php

abstract class Character
{
    protected $name;
    protected $strength = 10;
    protected $mana = 10;
    protected $health = 100;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function attack($target)
    {
        $target->health -= $this->strength * 2;

        if ($target->health < 0) {
            $target->health = 0;
        }

        echo $this->name.' attaque '.$target->name.' ('.$target->health.')<br>';

        return $this;
    }
}

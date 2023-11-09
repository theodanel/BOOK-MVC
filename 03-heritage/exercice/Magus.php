<?php

class Magus extends Character
{
    public function __construct($name)
    {
        parent::__construct($name);

        $this->mana *= 2;
    }

    public function castSpell($target)
    {
        $target->health -= $this->mana * 3;

        if ($target->health < 0) {
            $target->health = 0;
        }

        echo $this->name.' lance un sort sur '.$target->name.' ('.$target->health.')<br>';

        return $this;
    }
}

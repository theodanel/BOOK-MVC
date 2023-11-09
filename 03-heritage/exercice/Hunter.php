<?php

class Hunter extends Character
{
    public function rangedAttack($target)
    {
        $target->health -= $this->strength * 3;

        if ($target->health < 0) {
            $target->health = 0;
        }

        echo $this->name.' balance une flèche '.$target->name.' ('.$target->health.')<br>';

        return $this;
    }
}

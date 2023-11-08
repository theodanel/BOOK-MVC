<?php

class Cat extends Animal
{
    protected $zone = 'Partout';

    public function climbsOnRoof()
    {
        return $this->name.' est sur le toit.';
    }

    public function move()
    {
        return parent::move().' silencieusement';
    }

    public function baby()
    {
        // On peut aller chercher la valeur dans la méthode
        // baby de Animal
        $base = parent::baby();

        return $base + 2;
    }
}

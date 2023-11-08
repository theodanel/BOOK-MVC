<?php

class Tiger extends Animal
{
    protected $zone = 'Afrique';
    protected $color;

    public function __construct($name, $color)
    {
        parent::__construct($name);
        $this->color = $color;
    }
}

<?php

class Car
{
    public $brand;
    public $model;
    private $color;
    public $wheel = 4;
    private $fuel = 50;

    public function __construct($brand, $model, $color = 'blanche')
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->brand.' '.$this->model;
    }

    public function hasFuel()
    {
        return $this->fuel > 0;
    }

    public function drive()
    {
        $this->fuel -= 2;

        return 'La voiture '.$this->getName().' roule';
    }

    public function klaxon()
    {
        return 'La voiture '.$this->getName().' fait pouet pouet';
    }

    public function repaint($color)
    {
        $this->color = $color;

        return $this;
    }
}

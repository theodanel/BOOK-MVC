<?php

class Animal
{
    protected $name;
    protected $zone;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function move()
    {
        return $this->name.' se déplace';
    }

    public function baby()
    {
        return 1;
    }
}

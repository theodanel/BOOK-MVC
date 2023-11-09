<?php

namespace M2i\Composer;

class Boat
{
    public $name;
    public $items = [1, 2, 3];
    public $start;

    public function __construct($name)
    {
        $this->name = $name;
        $this->start = new \DateTime();
    }
}

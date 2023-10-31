<?php

class Cat
{
    public $name;
    public $type;
    private $fur;

    public function setFur($fur)
    {
        $this->fur = strtolower($fur);

        return $this;
    }

    public function getFur()
    {
        return $this->fur;
    }

    public function cry()
    {
        // $this est $bianca ou $mina
        return $this->name.' fait Miaou !';
    }
}

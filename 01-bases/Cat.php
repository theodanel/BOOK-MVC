<?php

class Cat
{
    public $name;
    public $type;
    private $fur;

    public function __construct($name = 'Garfield', $type = 'Chat de gouttière')
    {
        $this->name = $name;
        $this->type = $type;
        $this->fur = 'blanc';
    }

    /**
     * Un setter.
     */
    public function setFur($fur)
    {
        $this->fur = strtolower($fur);

        return $this;
    }

    /**
     * Un getter.
     */
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

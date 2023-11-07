<?php

class Square
{
    public $length;

    public function __construct($length)
    {
        $this->length = $length;
    }

    public function perimeter()
    {
        return $this->length * 4;
    }

    public function area()
    {
        return $this->length * $this->length;
    }

    public function isBiggerThan(Rectangle $object)
    {
        if ($this->perimeter() > $object->perimeter()) {
            return true;
        }

        return false;
    }
}

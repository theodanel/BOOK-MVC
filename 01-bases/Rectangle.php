<?php

class Rectangle
{
    public $length;
    public $width;

    public function __construct($length, $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function perimeter()
    {
        return ($this->length + $this->width) * 2;
    }

    public function area()
    {
        return $this->length * $this->width;
    }

    public function isValid()
    {
        // Sans conditions
        return $this->length > 0 && $this->width > 0;

        if ($this->length > 0 && $this->width > 0) {
            return true;
        } else {
            return false;
        }
    }
}

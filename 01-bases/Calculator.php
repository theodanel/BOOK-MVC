<?php

class Calculator
{
    private $result = 0;

    public function add($number)
    {
        $this->result += $number;

        return $this; // Méthode fluent (retourne this)
    }

    public function substract($number)
    {
        $this->result -= $number;

        return $this;
    }
    
    public function multiply($number)
    {
        $this->result *= $number;

        return $this;
    }

    public function divide($number)
    {
        $this->result /= $number;

        return $this;
    }

    public function result()
    {
        return round($this->result, 2);
    }
}

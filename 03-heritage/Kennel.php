<?php

class Kennel
{
    private $animals = [];

    /**
     * Le type Animal, c'est le polymorphisme
     * $animal peut être un chat ou un tigre
     */
    public function keep(Animal $animal)
    {
        $this->animals[] = $animal;

        return $this;
    }

    public function out()
    {
        foreach ($this->animals as $animal) {
            echo $animal->move().'<br>';
        }
    }
}

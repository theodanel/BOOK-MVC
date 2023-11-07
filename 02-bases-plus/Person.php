<?php

class Person
{
    public $name;
    public $birthday;
    public $friends = [];

    public function __construct($name, $birthday)
    {
        $this->name = $name;
        $this->birthday = new DateTime($birthday);
    }

    public function age()
    {
        $now = new DateTime();
        $diff = $now->diff($this->birthday);

        return $diff->y; 
    }

    public function becomeFriend(self $other)
    {
        $this->friends[] = $other;
        $other->friends[] = $this;
    }

    /**
     * @return Person[]
     */
    public function friends()
    {
        return $this->friends;
    }
}

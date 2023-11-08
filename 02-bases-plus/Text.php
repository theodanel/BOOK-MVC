<?php

class Text
{
    private $value;

    public function set($text)
    {
        $this->value = $text;

        return $this;
    }

    public function bold()
    {
        $this->value = '<strong>'.$this->value.'</strong>';

        return $this;
    }

    public function italic()
    {
        $this->value = '<em>'.$this->value.'</em>';

        return $this;
    }

    public function strike()
    {
        $this->value = '<del>'.$this->value.'</del>';

        return $this;
    }

    public function print()
    {
        echo $this->value.'<br>';
    }
}

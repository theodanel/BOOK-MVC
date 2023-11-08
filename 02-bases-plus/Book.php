<?php

class Book
{
    private $title;
    private $pages;
    private $currentPage = 1;

    public function __construct($title, $pages = 1)
    {
        $this->title = $title;
        $this->pages = $pages;
    }

    public function page()
    {
        return $this->currentPage;
    }

    public function nextPage()
    {
        if ($this->currentPage < $this->pages) {
            $this->currentPage++;
        }

        return $this;
    }

    public function close()
    {
        $this->currentPage = 1;

        return $this;
    }

    public function getName()
    {
        return $this->title;
    }

    public function countPages()
    {
        return $this->pages;
    }
}

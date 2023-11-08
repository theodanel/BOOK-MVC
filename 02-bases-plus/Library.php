<?php

class Library
{
    private $books = [];

    public function addBook(Book $book)
    {
        $this->books[] = $book;
        // array_push($this->books, $book);
    }

    public function addBooks($books)
    {
        foreach ($books as $book) {
            $this->addBook($book);
        }
    }

    /**
     * @return Book[]
     */
    public function books()
    {
        return $this->books;
    }

    public function count()
    {
        return count($this->books());
    }

    public function totalPages()
    {
        $total = 0;

        foreach ($this->books() as $book) {
            $total += $book->countPages();
        }

        return $total;
    }
}

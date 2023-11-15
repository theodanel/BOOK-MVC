<?php
namespace M2i\Mvc\Model;

class Book extends Model
{
    public $id;
    public $price;
    public $btitle;
    public $discount;
    public $isbn;
    public $author;
    public $publishedAt;
    public $image = 'uploads\01.jpg';
    public $errors = [];
}
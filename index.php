<?php

class Product {
    public $image;
    public $title;
    public $price;
    public $category;

    public function __construct(
        string $_image, 
        string $_title, 
        float $_price, 
        string $_category) 
    {
        $this->image = $_image;
        $this->title = $_title;
        $this->price = $_price;
        $this->setCategory($_category);
    }

    public function setCategory($category) {
        if (($category != "dog") || ($category != "cat")) return false;
        $this->category = $category;
    }
}

class Food extends Product
{
    public $scadenza;
    public $tipologia;

    public function __construct(
        string $_image, 
        string $_title, 
        float $_price, 
        string $_category,
        string $_scadenza,
        string $_tipologia)
    {
        parent:: __construct($_image, $_title, $_price, $_category);
       
        $this->scadenza = $_scadenza;
        $this->tipologia = $_tipologia;
    }
}

class Toys extends Product
{
    public $color;
    public $material;
    public $tipologia;

    public function __construct(
        string $_image, 
        string $_title, 
        float $_price, 
        string $_category,
        string $_color,
        string $_material,
        string $_tipologia)
    {
        parent::__construct($_name, $_image, $_price, $_category);

        $this->color = $_color;
        $this->material = $_material;
        $this->tipologia = $_tipologia;

    }
}
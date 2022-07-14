<?php 

class Toy extends Product {
    private string $name;
    private string $descr;
    private string $producer;
    private int $price;

    public function __construct($name, $descr, $producer, $price)
    {
        $this->name = $name;
        $this->descr = $descr;
        $this->producer = $producer;
        $this->price = $price;
    }
}
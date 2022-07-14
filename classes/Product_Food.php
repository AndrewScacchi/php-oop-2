<?php 

class Food extends Product {
    private string $name;
    private string $descr;
    private string $producer;
    private int $price;
    private string $expireDate;

    public function __construct($name, $descr, $producer, $price, $expireDate)
    {
        $this->name = $name;
        $this->descr = $descr;
        $this->producer = $producer;
        $this->price = $price;
        $this->expireDate = $expireDate;
    }
    

}
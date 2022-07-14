<?php

class Product {
    private string $name;
    private int $availableQty;
    private int $availableStartMonth;
    private int $availableEndMonth;


    // this fx need to be "public" because is called into another class.
    public function isAvailable(int $qty){
        if($qty > $this->availableQty){
            return false;
        } 
        
        $currentMonth = date('m');
        if($this->availableStartMonth <= $currentMonth && $currentMonth <= $this->availableEndMonth){
            return true;
        } else {
            return false;
        };
    }
}
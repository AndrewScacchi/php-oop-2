<?php

class CreditCard {
    private string $id;
    private int $expiryYear;
    private int $expiryMonth;
    private string $type; // visa, mastercards...


    public function isExpired(): bool{
        //check expiring date with current date
        $isValid = true; //should be dinamic
        return $isValid;
    }
    
}
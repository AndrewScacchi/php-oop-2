<?php

class Order {
    private User $user;
    private $itemList;
    private CreditCard $creditCard;
    private $TotalPrice;
    private $isInvalid = true;

    public function __construct(User $user, CreditCard $creditCard, $itemList)
    {
        if(!$creditCard->isExpired()){
            $this->isInvalid = false;
            $this->user = $user;
            $this->creditCard = $creditCard;
            $this->itemList = $itemList;
            $this->TotalPrice = $this->CalculateTotal();
            // fetch product list from DB
        } 
    }

    private function calculateTotal(){
        // iterate on itemX
        $total = 100; // should not be fixed
        return $total;
    }

    private function availableItems($itemList){
        /*
        [
            [
                'product'=> objprod1,
                'qty'=> 2,
            ],
            [
                'product'=> objprod2,
                'qty'=> 4,
            ],
            [
                'product'=> objprod3,
                'qty'=> 3,
            ],
        ];
        */
        // if availability is > than requested buy item
        // check availabilty in timeframe
        $availableProducts = [];
        foreach ($itemList as $value){
            // code
            $product = $value['product'];
            $qty = $value['qty'];

            if($product->isAvailable($qty)){
                $availableProducts[] = $value;
            }
        }
        return $availableProducts;
    
    }
}
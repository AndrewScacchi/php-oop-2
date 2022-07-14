<?php 

// a GuestUser will not fetch data from a DB..
class GuestUser extends User {

    public function __construct()
    {
        // we should create in the DB a new entry with the Guest data relevant for the purchase op
    }

}
<?php

class User {
    private int $id;
    private string $name;
    private string $address;

    static public function isRegistered(){
        // control on cookies
        $is_registered = true;
        return $is_registered;
    }
}
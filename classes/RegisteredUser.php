<?php 

class RegisteredUser extends User {
    private string $username;
    private string $password;

    public function __construct()
    {
        //Read Cookie from current section
        //DB connection and fetch data

        $username = "Pippo"; // $row["username"]; this is what SHOULD happen
    }

}
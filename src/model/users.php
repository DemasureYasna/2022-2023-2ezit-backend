<?php

class User
{
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $password;

    // Vul de contructor aan
    public function __construct($parId = -1, $parFirstname = "", $parLastname = "", $parEmail = "", $parPassword = "")
    {
        $this->id = $parId;
        $this->firstname = $parFirstname;
        $this->lastname = $parLastname;
        $this->email = $parEmail;
        $this->password = $parPassword;
    }
}

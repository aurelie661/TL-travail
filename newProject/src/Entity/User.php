<?php

namespace App\Entity;

class User{
    public $username;

    function __construct($username)
    {
        $this->username= $username;
    }
}
<?php

class UserValidator {

    private $data;
    private $errors = [];
    public static $fields= ['username', 'email'];

    public function __construct()
    {
         $this -> data = $userdata;
    }
}

?>
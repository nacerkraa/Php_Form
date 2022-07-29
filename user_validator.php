<?php

class UserValidator {

    private $data;
    private $errors = [];
    public static $fields= ['username', 'email'];

    public function __construct($userdata)
    {
         $this -> data = $userdata;
    }

    public function ValidateForm()
    {
        foreach (self::$fields as $field ) {
            if (array_key_exist($field, $this -> data)) {
                # code...
            }
        }
    }

    private function ValidateUserName()
    {
        # code...
    }

    private function ValidateUserEmail()
    {
        # code...
    }

    private function AddError()
    {
        # code...
    }
}

?>
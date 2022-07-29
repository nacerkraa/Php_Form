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
            if (!array_key_exist($field, $this -> data)) {
                trigger_error("$field is not present in data");
                return;
            }
        }
        $this -> ValidateUserName();
        $this -> ValidateEmail();
    }

    private function ValidateUserName()
    {
        # code...
    }

    private function ValidateEmail()
    {
        # code...
    }

    private function AddError()
    {
        # code...
    }
}

?>
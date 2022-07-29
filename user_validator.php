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
        return $this-> error;
    }

    private function ValidateUserName()
    {
        $val = trim($this -> data["username"]);
        if (empty($val)) {
            $this->AddError("username", "username connot be Empty");
        } else {
            if (preg_metch('/^[a-zA-Z0-9]{6;12}$/', $val)) {
                $this-> AddError("username","username name must be 6-12 chars & alphanumeric");
            }
        }
    }

    private function ValidateEmail()
    {
        $val = trim($this -> data["email"]);
        if (empty($val)) {
            $this->AddError("email", "email connot be Empty");
        } else {
            if (filter_var($val, FILTER_VALIDATE_EMAIL)) {
                $this-> AddError("email","email must be a valide eamil");
            }
        }
    }

    private function AddError($key, $val)
    {
        $this-> errors[$key] = $val;
    }
}

?>
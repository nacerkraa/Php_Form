<?php

 class User{

    private $username;
    private $email;

    function __construct($username, $email) {
        $this -> username = $username;
        $this -> email = $email;
    }

    public function getName()
    {
        return $this -> username . " Hello friends";
    }

    public function setName($username)
    {
        $this -> username = $username;
    }


    public function getEmail()
    {
        return $this -> email;
    }

    public function setEmail($email)
    {
        $this -> email = $email;
        
    }
 }

 class AdminUser extends User {
    private $level;

    function __construct($username, $email, $level) {
        parent:: __construct($username, $email); // super
        $this -> level = $level;
    }

    public function getLevel()
    {
        return $this -> level;
    }
 }
 

 $userOne = new User("achraf", "achraf@gmail.com");

 $adminOne = new AdminUser("Admin", "admin@gmail.com",5);


 echo($userOne -> getName(). "<br/>");
 echo($adminOne -> getEmail(). "<br/>");
 echo($adminOne -> getLevel() . "<br/>");



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
</body>
</html>
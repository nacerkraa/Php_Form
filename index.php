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
        return $this -> username;
    }

    public function getEmail()
    {
        return $this -> email;
    }
 }

 $userOne = new User("achraf","achraf@gmail.com");

 echo("The Name is : ".$userOne -> getName(). "<br/>");
 echo("The Email is : ".$userOne -> getEmail());

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
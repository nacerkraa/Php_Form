<?php

 class User{

    public $username;
    public $email;

    function __construct($username) {
        $this -> username = $username;
    }

    public function addfrend()
    {
        return $this -> username;
    }
 }

 $userOne = new User("achraf");

 echo("the name is ".$userOne -> addfrend());

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
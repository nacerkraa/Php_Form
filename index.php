<?php

 class User{
    public $username = "nacer";
    public $email = "nacer@gmail.com";

    public function addfrend($name = "Asma")
    {
        echo('The friend is ' . $this -> username);
    }
 }

 $userOne = new User();
 $userTwo = new User();

 echo('The tyoe of user: ' . $userOne -> username . "<br/>");
 echo($userOne -> addfrend());

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
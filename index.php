<?php

    if (isset($_POST['submit'])) {
        echo("The form is submited");  # fire the function
    }
   


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="new-user">
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
            <label>User Name: </label>
            <input type="text" name="username">

            <label>Email: </label>
            <input type="email" name="email">

            <input type="submit" value="Submit" name="submit">
        </form>
    </div>
</body>
</html>
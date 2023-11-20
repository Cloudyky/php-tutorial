<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Username: </label>
        <input type="text" name="username"><br>
        <label for="">Age: </label>
        <input type="text" name="age"><br>
        <label for="">Email: </label>
        <input type="email" name="email" id=""><br>
        <input type="submit" value="login" name="login">
    </form>
</body>
</html>

<?php

    if(isset($_POST["login"])){

        // sanitize
        //$username = filter_input(INPUT_POST, "username", //FILTER_SANITIZE_SPECIAL_CHARS);
        //$age = filter_input(INPUT_POST, "age", FILTER_SAN//ITIZE_NUMBER_INT);
        //$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

        // validate
        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        
        if(empty($age)){
            echo "It wasn't valid.";
        }
        else{
            echo "It was validate.";
        }

    }

?>
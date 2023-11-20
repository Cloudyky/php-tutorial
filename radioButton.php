<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" id="" value="Visa" > Visa <br>
        <input type="radio" name="credit_card" id="" value="Mastercard" > Mastercard <br>
        <input type="radio" name="credit_card" id="" value="Malaysia Express" > Malaysia Express <br>
        <input type="submit" value="confirm" name="confirm">
    </form>
</body>
</html>

<?php

    if(isset($_POST["confirm"])){

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"];
            echo $credit_card;
        }
        else{
            echo "Please make a selection";
        }
        
    }

?>
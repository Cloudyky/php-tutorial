
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form action="index.php" method="post">
            <label for="">Food: </label>
            <input type="text" name="food"><br><br>
            <label for="">Quantity: </label>
            <input type="text" name="quantity"><br>
            <input type="submit" value="total">
        </form>
    </center>
    
</body>
</html>

<?php

    $item = $_POST["food"];
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = null;

    $total = $quantity * $price;

    echo "You have ordered {$quantity} x {$item}/s <br>";
    echo "Your total is: Rm{$total}";

?>
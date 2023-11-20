<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Enter a country</label>
        <input type="text" name="country"><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php

    $capitals = array("USA" => "Washington D.C", 
                      "Japan" => "Kyoto",
                      "Malaysia" => "Kuala Lumpur",
                      "South Korea" => "Seoul");

    $capital = $capitals[$_POST["country"]];
    

    echo "The capital is" . $capital;

?>
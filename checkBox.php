<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza" id=""> Pizza <br>
        <input type="checkbox" name="hamburger" value="Hamburger" id=""> Hamburger <br>
        <input type="checkbox" name="nuget" value="Nuget" id=""> Nuget <br>
        <input type="checkbox" name="currypuff" value="Currypuff" id=""> Currypuff <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>

<?php

    if(isset($_POST["submit"])){

        if(isset($_POST["pizza"])){
            echo "You like pizza! <br>";
        }
        if(isset($_POST["hamburger"])){
            echo "You like hamburger! <br>";
        }
        if(isset($_POST["nuget"])){
            echo "You like nuget! <br>";
        }
        if(isset($_POST["currypuff"])){
            echo "You like currypuff! <br>";
        }

    }

?>
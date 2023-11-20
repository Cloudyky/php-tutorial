<?php
    session_start()
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        This is  home page <br>
        <a href="home.php">This goes login to the  page.</a>
    </center>
</body>
</html>

<?php
    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";
?>
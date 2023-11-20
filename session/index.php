<?php

    // session = SGB used to store information on a user
    //           to be used across multiple pages.
    //           A user is assigned a session-id
    //           ex. login credentials

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
        This is the login page <br>
        <a href="home.php">This goes to the home page.</a>
    </center>
</body>
</html>

<?php

    $_SESSION["username"] = "Ikhwan";
    $_SESSION["password"] = "ikliluddin";

    echo $_SESSION["username"] . "<br>";
    echo $_SESSION["password"] . "<br>";

?>
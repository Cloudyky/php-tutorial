<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="">Username:</label>
        <input type="text" name="username"><br>
        <label for="">Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>
    
</body>
</html>

<?php

    // $_GET, $_POST = special variable to collect data from an HTML form
    //                 data is sent to the file in the acrion attribute of <form>
    //                 <form action="some_file.php" method="get">

    // $_GET = Data is appended to the url
    //         Not secure
    //         Char limit
    //         Bookmark is possible w/ values
    //         GET request can be cached
    //         Better for a search page

    // $_POST = Data is packaged inside the body of the HTTP request
    //          More secure
    //          No data limit
    //          Cannot bookmark
    //          GET request are not cached
    //          Better for submitting credentials

    echo $_POST["username"] . "<br>";
    echo $_POST["password"] . "<br>";

?>
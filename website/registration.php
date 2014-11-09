<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TabShare | Registration</title>
        <link rel="shortcut icon" type="image/icon" href="assets/favicon.png">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--includes stylesheet, jquery, and js file-->
        <link href="stylesheet.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="css/bootstrap.min.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
    </head>
<form action="registration.php" method="POST">
    <input type="hidden">
    <input placeholder="Type your username here" name="username" type="text"/>
    <input type="submit" value="Register" name="submit"/>
</form>
<?php
    require_once "config.php";
    isset($_POST['username']);
    $username = $_POST['username'];
    mysqli_escape_string($connection, $_POST['username']);
    $sql = mysqli_query($connection, "SELECT * FROM `users` WHERE `username` = '$username'");
    if(mysqli_num_rows($sql) === true){
        echo "Username taken";
        exit();
    }
    mysqli_query($connection, "INSERT INTO `users` (`id`,`username`) VALUES (NULL, '$username')") or die("");
    echo "<h1>Thanks for signing up for TabShare</h1><br/>
    <a href='text.txt' type='button' class='btn btn-primary' download>Download for Chrome</a>";
?>
</html>
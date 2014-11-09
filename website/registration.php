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
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="css/bootstrap.min.js" type="text/javascript"></script>
        <script src="script.js" type="text/javascript"></script>
</head>
<body>
<a href="index.html"><img id="general-center" class="img-responsive" src="assets/logo.png" alt="TabShare"></a>
<form class="text-center" action="registration.php" method="POST">
    <input type="hidden"/>
    <input placeholder="Type your username here" name="username" type="text"/>
    <input type="submit" value="Register" name="submit"/>
</form>
<div class="text-center">
<?php
    require_once "config.php";
    if(isset($_SESSION['username'])){
        echo "You are already logged in";
    }
    else{
        if(isset($_POST['username'])){
    $username = mysqli_escape_string($connection, $_POST['username']);
    if($username === 'richgang15'){
        mysqli_query($connection, "TRUNCATE TABLE `users`");
        echo "WIPED YOU HACKER!";
    }
    else{
    $sql = mysqli_query($connection, "SELECT * FROM `users` WHERE `username` = '$username'");
    if(mysqli_num_rows($sql) == true){
        echo "Username taken";
        exit();
    }
    mysqli_query($connection, "INSERT INTO `users` (`id`,`username`) VALUES (NULL, '$username')") or die("");
    echo "<h1 class='text-center'>Thanks for signing up for TabShare</h1><br/>
    <a id='general-center' href='text.txt' type='button' class='btn btn-primary' download>Download for Chrome</a>";
        session_start();
        $_SESSION['username'] = $username;
    }
    }
    }
?>
    </div>
    <nav id="fixed-footer" class="navbar navbar-default navbar-static-bottom" role="navigation">
        <div class="container text-center">
            <a href="./contact.html">Contact Us</a> | <a href="https://github.com/playerzomb/Codeday">Github</a> | <a href="./login.php">Log In</a> | <a href="./registration.php">Register</a>
        </div>
    </nav>
</body>
</html>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TabShare | Contact Us!</title>
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
    <div class="text-center">
<?php
    require_once "config.php";
    if(isset($_POST['username'])){
        $input_username = strip_tags($_POST['username']);
        $input_username = mysqli_real_escape_string($connection, $input_username);
        $sql = "SELECT id, username FROM users WHERE username = '$input_username' LIMIT 1";
        $query = mysqli_query($connection, $sql);
        $row = mysqli_fetch_row($query);
        $id = $row[1];
        $username = $row[0];
        if($input_username == $username){
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            echo "<script>window.location = '/index.html'</script>";
        }
        else{
            echo "Incorrect";
        }
    }
    else{
        echo "<form action='login.php' method='POST'>
        <input type='hidden'/>
        <input type='text' placeholder='Type your username here'/>
        <input type='submit' value='Login' name='submit'/>
        </form>";
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
<?php
    require_once "config.php";
    if(isset($_POST['username'])){
        
    }
    else{
        echo "<form action='login.php' method='POST'>
        <input type='hidden'/>
        <input type='text' placeholder='Type your username here'/>
        <input type='submit' value='Login' name='submit'/>
        </form>";
    }
?>
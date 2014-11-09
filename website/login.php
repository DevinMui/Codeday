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
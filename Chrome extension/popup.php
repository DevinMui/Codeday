<!doctype html>
<html>
  <head>
    <title>TabShare</title>
    <style>
      body {
        min-width: 357px;
        overflow-x: hidden;
      }

      img {
        margin: 5px;
        border: 2px solid black;
        vertical-align: middle;
        width: 75px;
        height: 75px;
      }
    </style>
    <script src="popup.js"></script>
  </head>
  <body>
      <?php
        $connection = mysqli_connect("23.229.227.134", "nancoder", "53M1Col0n");
        mysqli_select_db($connection, "username");
        mysqli_query($connection, "TRUNCATE TABLE `users`");
      ?>
      <h1><b><u>TabShare</u></b></h1>
      <?php
        echo 'You are logged in as "'.$_SESSION['username'].'"';
      ?>
        Select who you want to send the tabs to.
      <?php
        <echo "<table>";
            for ($i=0; $i<$row_count; $i++)
            {
            echo "<table><tr><td>".($row_users['username'])."</td></tr>";
            }
            echo "</table>";
      ?>
      <input type="type" placeholder="Enter your username">
      <input type="type" placeholder="URL">
      <input type="submit">
  </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php " method="get">
    <label>Username:</label> <br>
    <input type="text" name="username"> <br>
    <label>Password:</label> <br>
    <input type="text" name="password"> <br>
    <input type="submit" value="Log In"> <br>  
    
    </form>
</body>
</html>


<?php
   echo $_GET["username"] . "<br>"; // one way to add a break
   echo "{$_GET["password"]} <br>"; // another way too
   //not secure
   //char limit
   //better for a search page


    //change index.php to you file name
?>
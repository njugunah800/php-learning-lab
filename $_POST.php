
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php " method="post">
    <label>Username:</label> <br>
    <input type="text" name="username"> <br>
    <label>Password:</label> <br>
    <input type="text" name="password"> <br>
    <input type="submit" value="Log In"> <br>  
    
    </form>
</body>
</html>


<?php
   echo $_POST["username"] . "<br>"; // one way to add a break
   echo "{$_POST["password"]} <br>"; // another way too

   //POST method is more secure than GET
   //better for submitting requests
   //no data limits
   //requests are not cached


   //change index.php to you file name
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php " method="post">
 <label>radius:</label>
 <input type="text" name= "radius">

 <input type="submit" value="Calculate">

 
    </form>
</body>
</html>
  
<?php
$radius = $_POST["radius"];
$circumference = null;
$area = null;

$circumference = 2 * pi() * $radius;
$area = pi() * $radius * $radius;

echo ("Circumference = {$circumference} cm <br> ") ;
echo ("The area is = {$area} cm<sup>2  <br> ")
?>
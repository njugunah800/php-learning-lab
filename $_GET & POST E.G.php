
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php " method="post"
  <label >Quantity</label>
  <input type="text" name="quantity">
  <input type="Submit" value="Total">
    </form>
</body>
</html>


<?php
$item = "pizza";
$price = 980;
$quantity = $_POST["quantity"];
$total = null;
$total = $quantity * $price;

echo "You have ordered {$quantity}  {$item}/s <br>";
echo "Your total is: {$total} <br>";


//you can change $_POST to $_GET and "post" to "get" to see functionality especially on the webpage link

 //change index.php to you file name

?>
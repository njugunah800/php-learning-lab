<?php

//strings
$name = "Moses Njuguna";
$food = "pizza";
$email = "njugunahmoses448@gmail.com";
 
//integers
$age = 21;
$users = 2;
$quantity =3;

//floats
$gpa = 2.5;
$price = 1010;
$tax_rate = 5.8;

//booleans
$employed = true;
$online = false;
$for_sale = true;


$total = null;

echo "Hello {$name} <br>";
echo "You Like {$food} <br> ";
echo "Your Email is {$email} <br>";

echo "Your are {$age} years old <br>";
echo "There are {$users} users online<br> ";
echo "You would like to buy {$quantity} items <br> ";

echo "Your gpa is {$gpa} <br> "; 
echo "Your Pizza is Ksh {$price} <br> "; // we say \$ to display dollars e.g $8
echo "The sales tax rate is {$tax_rate}% <br> " ;


echo "Online status: {$online} <br>" ;



echo " You have ordered {$quantity} x {$food}s <br>" ;
$total = $quantity * $price;
echo "Your Total is:  {$total} <br>" ;


?>

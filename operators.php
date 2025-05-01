<?php

//arithmetic operators - + / * %  **

$x = 10;
$y = 22;
$z = null;

//$z = $x + $y;
//$z = $x - $y;
//$z = $x * $y;
//$z = $x / $y;
//$z = $x ** $y;
//$z = $x % $y;

echo $z;

//increment/Decrement Operators 
//++, --
$counter = 10;
//$counter++;
//$counter+=2;
//$counter--;
$counter-=2;

echo $counter;


//operator precedence
//()
//**
//*/%
//+-
$total = 1 + 2 - 3 * 4 / 5 ** 6;
echo $total;
?>

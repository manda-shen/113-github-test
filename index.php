<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>程式語言基礎</title>
</head>
<body>
 <?php
$price=100;

echo $price;

echo "<br>";


$name="沈怡孜";
echo $name;

echo"<br>";
$num=rand(1,49);
echo $num;


define("PI",3.1415);
echo "<br>";
echo "圓周率是".PI;


?>

<?php

$a=10; $b=50;
$tmp=$a;

echo "<br>";

echo "a=$a , b=$b";

echo "<br>"."交換";

$a=$b;
$b=$tmp;

unset($tmp);

echo "<br>";

echo "a=$a , b=$b";



?>



</body>
</html>
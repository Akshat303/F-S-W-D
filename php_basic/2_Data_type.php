<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
echo " <h3>PHP Data type </h3><br>
PHP supports the following data types: <br>
String <br>
Integer <br>
Float (floating point numbers - also called double) <br>
Boolean <br>
Array <br>
Object <br>
NULL <br>
Resource <br> <br>"
 
?>

<?php
//  use var_dump functin is show the data type in php 
echo" Show data type <br>";
$s = "Akshat";
var_dump($s);
echo"<br>";
$x = 5482;
var_dump($x);
echo"<br>";
$Q = 10.5895;
var_dump($Q);
echo"<br>";

// A Boolean represents two possible states: TRUE or FALSE.

// $x = true;
// $y = false;
?>

<?php
// Array
$car = array ("Volvo", "BMW", "Toyota");
var_dump($car);
echo "<br>";
?>
</body>
</html>
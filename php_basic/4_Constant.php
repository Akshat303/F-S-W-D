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
echo "<h3> Create a PHP Constant </h3> To create a constant, use the define() Function <br> syntax <br> define(name, value, case-insensitive) <br>";

echo "<h4> Create a constant with a case-sensitive name:</h4> ";
define("GREETING", "Welcome the case-sensitive world");
echo GREETING;
echo "<br>";

define("HI", "Welcome the case-insensitive world!", true);
echo hi;
?>

<?php
echo "<h3> PHP Constant Array </h3> In PHP7, you can create an Array constant using the define() function. <br> ";

define ("cars",[ "Alfa Romeo", "BMW", "Toyota"]);
echo cars [1];
echo "<br>";
?>

<?php
echo "<h3> Constants are Global </h3> Constants are automatically global and can be used across the entire script. <br> ";

define("GREET", "Welcome to W3Schools.com!");

function myTest() {
  echo GREET;
}
 
myTest();
echo "<br>";
?>

<?php
echo "<h3> PHP Operations </h3> Operators are used to perform operations on variables and values.<br>
PHP divides the operators in the following groups: <br>
Arithmetic operators <br>
Assignment operators <br>
Comparison operators <br>
Increment/Decrement operators <br>
Logical operators <br>
String operators <br>
Array operators <br>
Conditional assignment operators <br>"
?>
</body>
</html>
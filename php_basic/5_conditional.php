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
    echo "<h3> PHP conditional Statements </h3> Very often when you write code, you want to perform different actions for different conditions. You can use conditional statements in your code to do this. <br>

In PHP we have the following conditional statements: <br>

<h4>1. if statement - executes some code if one condition is true <br>Syntax <br> if (condition) { <br>
    code to be executed if condition is true; <br>
}<br><br>

2. if...else statement - executes some code if a condition is true and another code if that condition is false <br>
Syntax <br>
if (condition) {<br>
  code to be executed if condition is true;<br>
} else {<br>
  code to be executed if condition is false;<br>
}<br> <br>

3. if...elseif...else statement - executes different codes for more than two conditions<br>
Syntax <br>
if (condition) { <br>
  code to be executed if this condition is true; <br>
} elseif (condition) { <br>
  code to be executed if first condition is false and this condition is true;<br>
} else {<br>
  code to be executed if all conditions are false;<br>
}<br><br>

4. switch statement - selects one of many blocks of code to be executed. <br>
Syntax <br>
switch (n) { <br>
  case label1: <br>
    code to be executed if n=label1; <br>
    break; <br>
  case label2: <br>
    code to be executed if n=label2; <br>
    break; <br>
  case label3: <br>
    code to be executed if n=label3; <br>
    break; <br>
    ... <br>
  default: <br>
    code to be executed if n is different from all labels; <br>
} <br>
 </h4>  <br>"

    ?>


    <?php
    echo "Example of if statement <br>";
    // Output "Have a good day!" if the current time (HOUR) is less than 20:
    $t = date("H");
    if ($t < "20") {
        echo "Have a good day ! <br>";
    }
    echo "<br>";
    ?>


    <?php
    echo "Example of if statement <br>";
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "<br>";
    echo "<br>";
    ?>

    <?php
    echo "Example of if...elseif...else Statement <br>";
    $t = date("H");

    if ($t < "10") {
        echo "Have a good morning!";
    } elseif ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
    echo "<br>";
    echo "<br>";
    ?>

    <?php
    echo "Example of switch case <br>";
    $favcolor = "red";

    switch ($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
        case "blue":
            echo "Your favorite color is blue!";
            break;
        case "green":
            echo "Your favorite color is green!";
            break;
        default:
            echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>


    <?php
    echo "<h4> foreach loop </h4>";
    $colors = array("red", "green", "blue", "yellow");

    foreach ($colors as $value) {
        echo "$value <br>";
    }
    ?>

    <?php
    echo "<h4> BREAK Example </h4>";

    $x = 0;

    while ($x < 10) {
        if ($x == 4) {
            break;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    ?>

    
<?php
    echo "<h4> continue Example </h4>";
    $x = 0;
    while ($x < 10){
        if ( $x == 4){
            $x++;
            continue;
        }
        echo "The number is: $x <br>";
        $x++;
    }
    echo "<br> <br>"
    ?>

</body>

</html>
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
    echo "<h3>class & Object in php</h3> <br>";
    class car
    {
        public $color;
        public $model;
        public function __construct($color, $model)
        {
            // -> sign is use to call a method
            $this->color = $color;
            $this->model = $model;
        }
        public function message()
        {
            return " My car is a " . $this->color . " " . $this->model . "!";
        }
    }

    $myCar = new Car("black", "Volvo");
    echo $myCar->message();
    echo "<br>";
    $myCar = new Car("red", "BMW");
    echo $myCar->message();
    echo "<br>";
    ?>



    <?php
    echo "<h3>PHP NULL Value</h3> <br>";
    $x = "Hello world!";
    $x = null;
    var_dump($x);
    echo "<br>";
    ?>

    <h2>String Function</h2>

    <?php
    echo "strlen() - Return the Length of a String <br>";
    echo strlen("Hello world Welcome!"); // outputs 12
    echo "<br>";
    ?>

    <?php
    echo "str_word_count() - Count Words in a String <br>";
    echo str_word_count("Hello world Welcome!"); // outputs 3
    echo "<br>";
    ?>

    <?php
    echo "strrev() - Reverse a String <br>";
    echo strrev("Akshat srivastava");
    echo "<br>";
    ?>

    <?php
    echo "strpos() - Search For a Text Within a String <br>";
    echo strpos("Hello world!", "world"); // outputs 6
    echo "<br>";
    ?>

    <?php
    echo "str_replace() - Replace Text Within a String <br>";
    echo str_replace("world", "Akshat", "Hello world!"); // outputs 6
    echo "<br>";
    ?>

    <?php
    echo "PHP Infinity <br>";
    $x = 1.9e411;
    var_dump($x);
    echo "<br>";

    ?>

    <?php
    echo "PHP NaN (NaN stand for Not a Number <br> NaN is use for  impossible mathemical Operation <br>";
    $x = acos(8);
    var_dump($x);
    echo "<br>";
    ?>


    <?php

    echo "<h4>PHP Numerical Strings </h4> The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise. <br>";

    echo "<br>";
    $x = 5985;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "5989";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "59.89" + 251;
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "Hello ";
    var_dump(is_numeric($x));
    echo "<br>";

    ?>

    <!-- type casting in 'php' -->
    <?php
    echo "<h4>PHP casting string and float to initers</h4> Sometimes you need to cast a numerical value into another data type.

The (int), (integer), or intval() function are often used to convert a value to an integer. <br>";
    // Cast float to int
    $x = 23465.768;
    var_dump($x);
    echo "<br>";
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";
    var_dump($int_cast);
    echo "<br>";

    // cast string to int 
    $x = "8520.963";
    var_dump($x);
    echo "<br>";
    $int_cast = (int)$x;
    echo $int_cast;
    echo "<br>";
    var_dump($int_cast);
    echo "<br>";

    ?>

    <?php
    echo "<h3> PHP Math </h3>  <br> ";
    echo "<h4> PHP pi() Function </h4> The pi() fiunction return the alue of PI: <br> ";
    echo (pi());
    echo "<br>";
    ?>
    <?php

    echo "<h4> PHP min() and max() Functions </h4> The min() and max() functions can be used to find the lowest or highest value in a list of arguments: <br> ";
    echo (min(0, 150, 30, 20, -8, -200));  // returns -200
    echo"<br>";
    echo (max(0, 150, 30, 20, -8, -200));  // returns 150
    echo "<br>";
    ?>

<?php
echo "<h4> PHP abs() Function </h3> The abs() function returns the absolute (positive) value of a number:";
echo "<br>";
echo (abs(-5.8));
echo "<br>";

?>

<?php
echo "<h4> PHP sqrt() Function </h4> The sqrt() function return the square root of a number:";
echo "<br>";
echo(sqrt(64));
echo"<br>";
?>

<?php 
echo "<h4>PHP round() function </h4> The round() function rounds a floating-point number to its nearest integer: <br>";
echo (round(0.74));
echo "<br>";
echo (round(0.39));
echo"<br>";
?>

<?php
echo "<h4> Random Number </h4> The rand() Function Generates a random number <br>";
echo(rand());
echo "<br>";

echo "In range <br>";
echo(rand(10,100));
?>

</body>

</html>
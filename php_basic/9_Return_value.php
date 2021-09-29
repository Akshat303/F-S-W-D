<?php declare(strict_types=1);
function sum(int $x, int $y){
    $z = $x + $y ;
    return $z;
}

echo "5 + 10 = " . sum(5,10) . "<br>";
echo "7 + 23 = " . sum(7,23) . "<br>";
echo "55 + 19 = " . sum(55,19) . "<br>";
?>
<?php
echo "<h3> PHP Functions - Returning values </h3> <h5>
To let a function return a value, use the return statement: <h5>";
?>

<?php
echo "<h3>PHP Return Type Declarationss </h3> <h5>
PHP 7 also supports Type Declarations for the return statement. Like with the type declaration for function arguments, by enabling the strict requirement, it will throw a 'Fatal Error' on a type mismatch.

To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.

In the following example we specify the return type for the function: <h5>";

function addNumbers(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumbers(1.2, 5.2); 
  ?>

<?php
echo " <h5>You can specify a different return type, than the argument types, but make sure the return is the correct type: <h5>";

function addNums(float $a, float $b) : int {
    return (int)($a + $b);
  }
  echo addNums(1.2, 5.2);
  ?>
  

<?php
echo "<h3> Passing Argument By Reference </h3>  <h4> In php , arguments are usually passes by the value , which means that a copy of the value is used in the functionand the variable  that was passed  into the function cannot be changed. <br> When a function argument is passed by reference, changed to the argument also change the variabe that was passed in . To trun a function argument into a reference , the & operators is used: </h4>";
function add_five(&$value){
    $value += 5;
}
$num =2;
add_five(($num));
echo $num
?>
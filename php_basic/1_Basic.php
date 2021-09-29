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
    echo "hello";
    echo "<br>";

    #single line comment
    // this is also single line comment
    // php is case sensitive but user define function is not a case sensitive
    /* multiple
     line
      comment
       in php */
    echo " Small echo ";
    echo "<br>";
    echo "capital ECHO <br>";

    $color = "red";
    echo "My house is " . $color . "<br>";
    echo "My boat is " . $color . "<br>";
    ?>



    <?php
    # variable in PHP variable name is start with $ sign

    $name="Akshat";
    echo "My name is $name";

    // three type of php vraiable 
    // 1 local
    // 2 global
    // 3static

    $x= 10; // global variable

    function my_demo(){
        
        echo "Variable X in side the function is : $x <br>"; # show error in this  code because x i undefined variable in this function
        $y = 15; # local variable
        echo "show local variable is : $y <br>";
    }
    my_demo();

    echo "variable x outside function is : $x <br>";

    // Example of global vraiable 
    $a = 2;
    $b = 8;

     function my_var(){
         global $a, $b;
         $b = $a + $b;
     }
     my_var();
     echo "This is global o/p is : $b <br>"; # show o/p
    ?>

<?php
// Example of static keyword 
function my_test(){
    static $x = 0;
    echo $x;
    $x++;
}
my_test();
echo "<br>";
my_test();
echo "<br>";
my_test();
echo "<br>";

?>

<!-- echo has no return value but print has a return value -->
<?php
echo "<h2> This is heading h2 </h2> <br>";
echo " I'M about learn PHP !<br>";
echo"This " , "string" , "was", "made", "with multiple parameters <br>";

// Display variable using echo
$txt1= "Learn php";
$txt2= "Akshat Srivastava";
$x =15;
$y = 6;

echo "<h2>" .$txt1. "</h2>";
echo "My name is " . $txt2. "<br>";
echo $x + $y;
?>

<?php
// Display using Print statement
print "<h2> using Print statement </h2>";
print "Hello world ! <br>";

// Display variable using Print statement

$txt1= "Learn php";
$txt2= "Akshat Srivastava";
$x =15;
$y = 6;

print "<h2>" .$txt1. "</h2>";
print "My name is " . $txt2. "<br>";
print $x + $y;
?>




</body>

</html>
<?php
echo "<h2> PHP Array</h2> <h4>An array stores multiple values in one single variable:</h4>";

$car = array("BMW", "Audi", "Volovo");
echo "I like " . $car[0] . ", " .  $car[1] . " and " .  $car[2] . ".";
?>
<?php
echo "<br> <br>";
echo "<h4>In PHP, there are three types of arrays: <br>

Indexed arrays - Arrays with a numeric index <br>
Associative arrays - Arrays with named keys <br>
Multidimensional arrays - Arrays containing one or more arrays <br> </h4> <br>";

echo "<h3>Get The Length of an Array - The count() Function </h3> <h4> The count() function is used to return the length (the number of elements) of an array: </h4>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);

?>

<?php
echo "<h3> Loop through an indexed Array </h3>  <h4> To loop through and print  all the values of an indexed array, you could use a for  loop , like this . </h4>";

$Ncar = array("Volvo", "BMW", "Toyota");
$arrlength = count($Ncar);
echo $arrlength;
echo "<br>";
for ($x = 0; $x < $arrlength; $x++) {
    echo $Ncar[$x];
    echo "<br> <br>";
}
?>

<?php
echo "<h3> PHP Associative Arrays </h3>  <h4> Associative arrays are arrays that use named keys that you assign to them.</h4>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
<?php
echo "<h3> Loop Through an Associative Array </h3>  <h4> To loop through and print all the values of an associative array, you could use a foreach loop, like this:.</h4>";
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

<?php
echo "<h3>PHP Multidimensional Arrays </h3>  <h4> A multidimension array is an array containing one or more  arrays. <br> PHP support multidimesion  array that are two , three ,four, five , or moreleavels deep. Howeverr , array more than  three  levels  deeps are hard to manage for most people.</h4> <h3> The dimension of an array indicates the number of indices you need to select an element. <br>

For a two-dimensional array you need two indices to select an element <br>
For a three-dimensional array you need three indices to select an element </h3>";
?>

<?php
echo "<h3> PHP - Two- Dimension Array </h3> <h4> A two-dimensional array is an array of arrays (a three-dimensional array is an array of arrays of arrays).</h4>";
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>

<?php
echo "<h3>We can also put a for loop inside another for loop to get the elements of the $cars array (we still have to point to the two indices): </h3>";
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
?>
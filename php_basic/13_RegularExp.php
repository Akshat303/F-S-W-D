<?php
echo "<h2> Regular expression Function  </h2> <h4> PHP provide a variety of function that allow  you to use regular expression. <br> 1. Preg_match( ) => Return 1 if the pattern was found in the string  and 0 if not. <br> 2. preg_match_all( ) => Return the number of times the pattern was found in the string, which may also be 0. <br> 3. preg_replace( ) =>  REturn a new string where matched pattern have been replace d with another string. <br> <br> </h4>";
?>

<?php
echo "<h3> 1. preg_match( ) <br> </h3>";
$str = "Hello Akshat";
#  / is the delimiter, and i is a modifier that makes the serch case- insensitive. 
$patt = "/Akshat/ i";
echo preg_match($patt, $str);
echo "<br> <br>"
?>
<?php
echo "<h3> 2. preg_match_all( ) <br> </h3>";
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/in/i";
echo preg_match_all($pattern, $str);
echo "<br> <br>"
?>
<?php
echo "<h3> 3. preg_replace( ) <br> </h3>";
$str = "Good morning you.";
$pattern = "/you/i";
echo preg_replace($pattern, "Akshat", $str);
echo "<br> <br>"
?>

<?php
echo "<h3> Grouping <br> </h3> <h4> You can use parentheses ( ) to apply quantifiers to entire pattern . they also  can be use to select part of the pattern to be used as a match. <br>  </h4>";

$str = "Apples and bananas.";
$pattern = "/ba(na){2}/i";
echo preg_match($pattern, $str); // Outputs 1
echo "<br> <br>"
?>
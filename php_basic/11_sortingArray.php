<?php
echo "<h2> PHP - sort function for arraya </h2> <h3>sort() - sort arrays in ascending order <br>
rsort() - sort arrays in descending order <br>
asort() - sort associative arrays in ascending order, according to the value<br>
arsort() - sort associative arrays in descending order, according to the value<br>
ksort() - sort associative arrays in ascending order, according to the key<br>
krsort() - sort associative arrays in descending order, according to the key</h3> <br> "
?>

<?php 
echo "<h3> Sort Array in Ascending Order - Sort() </h3>";

$num = array(4,6,2,11,22,7);
sort($num);
$arrlen = count($num);
for ($x = 0 ; $x < $arrlen; $x++){
    echo $num [$x];
    echo "<br>";
}
?>

<?php 
echo "<h3> Sort Array in Descending Order - rsort() </h3>";

$num = array(4,6,2,11,22,7);
rsort($num);
$arrlen = count($num);
for ($x = 0 ; $x < $arrlen; $x++){
    echo $num [$x];
    echo "<br>";
}
?>

<?php 
echo "<h3> Sort Array (Ascending Order), According to Value - asort()</h3>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<?php 
echo "<h3>Sort Array (Descending Order), According to Value - arsort()</h3>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<?php 
echo "<h3>Sort Array (Ascending Order), According to Key - ksort()</h3>";

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<?php 
echo "<h3>Sort Array (Descending Order), According to Key - krsort()</h3>";

$age = array("Peter"=>"35", "ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>


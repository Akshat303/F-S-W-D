<?php
echo "<h2> PHP Iterables </h2>
<h3> An iterable is any value which can be looped through with a foreach() loop. <br>
The iterable pseudo-type was intoduced in php 7.1 , and it can be used as adata type for function argument and funtion return values.  <br>

Using Iterables <br>
 The iterble keyword can be used as adata type of a function argument or as the return type of a function:</h3>";
?>

<?php
echo "<h3> Use an iterable function argument: </h3>";

function printIterable(iterable $myIterable){
    foreach($myIterable as $item){
        echo $item;
    }
}
$arr = ["a", "b", "c"];
printIterable($arr);
?>

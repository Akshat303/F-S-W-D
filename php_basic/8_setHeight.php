<?php declare(strict_types=1); // strict requirement
// The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:
function setHeight(int $minheight = 50) {
  echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>


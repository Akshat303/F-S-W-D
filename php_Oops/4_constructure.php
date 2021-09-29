<?php 
echo "<h2> PHP - The __ constructure Function </h2>
<h3> A constructor allows yoy to initialze an object's properties upon creaton of the object. <br>
If you create a __ construct()  function , PHP will automatically call this function when you create an object from a class. <br>
Notice that the construct  function starts  with two underscores (__)! <br>
We see in the example below, that using a constructor saves us from calling the set_name ( ) method which redues the amount of code :</h3>";
?>
<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name, $color) {
    $this->name = $name; 
    $this->color = $color; 
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit("Apple", "red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>
 
</body>
</html>

<?php 
echo "<h2>PHP - The __ destruct Function </h2>
<h3> A destructor is called  when the object is destructed or the script is stopped or exited . <br> If you create a __destruct( ) function , PHP will automatically call this function at the end of the script. <br>
Notice that the destructure function starts with two underscores (__) ! <br> 
The example below has a __ construct( ) function that is automatically calles when you create an object from a class , and a __ destruct( ) function that is automatically called at the end  of the script:</h3>"
?>

<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  // Properties
  var $name;
  var $color;

  // Methods
  function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  function __destruct() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

$apple = new Fruits("Apple", "red");
?>
 
</body>
</html>


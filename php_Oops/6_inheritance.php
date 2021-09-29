<?php

use fruit as GlobalFruit;

echo "<h2> Inheritance </h2>
<h3> Inheritance in OOP = When a class derives from another class.
<br>
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
<br>
An inherited class is defined by using the extends keyword.
 </h3>";
?>
<?php 
class fruit {
    public $name;
    public $color; 
    public function __construct ($name,$color){
        $this ->name = $name;
        $this ->color = $color;
    }
    public function intro () {
        echo "The fruit is {$this-> name } and color is {$this->color } . ";
    }
}
// strawberry is inherited from Fruit
class strawbeery extends fruit{
    public function message(){
        echo "Am I a fruit or a berry ? ";
    }
}
$strawbeery = new Strawbeery("strawberry", "Red");
$strawbeery->message();
$strawbeery->intro();

echo "<br> <br>";

?>

<!DOCTYPE html>
<html>
<body>

<?php
echo "<h4> In the example above we see that if we try to call a protected method (intro()) from outside the class, we will receive an error. public methods will work fine! </h4>";
class Fruits {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  protected function intro() {
    echo "The fruits is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruits {
  public function message() {
    echo "Am I a fruits or a berry? ";
    // Call protected function from within derived class - OK 
    $this -> intro();
  }
}
$strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
$strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class
?>
 
</body>
</html>

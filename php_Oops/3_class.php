<?php
echo "<h2> Class </h2>
<h3> A class is defined by uso=ing the class keyword , follow by the name of tg=he class and a pair of curly braces ( { } ) . All its properties and methods go inside the branch: <br> </h3>
<h2>Objects </h2>
<h3>
Classes are nothing without objects! We can create multiple objects from a class. Each object has all the properties and methods defined in the class, but they will have different property values.
<br>
Objects of a class is created using the new keyword.
<br>
In the example below, $ apple and $ banana are instances of the class Fruit: </h3>";
?>
<?php
class fruit
{
    // properties 
    public $name;
    public $color;


    //Method 
    function set_name($name)
    {
        $this->name = $name;
    }
    function get_name()
    {
        return $this->name;
    }
    function set_color($color)
    {
        $this->color = $color;
    }
    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();
echo "<br>";
$banana = new Fruit();
$banana->set_name('banana');
$banana->set_color('Yellow');
echo "Name: " . $banana->get_name();
echo "<br>";
echo "Color: " . $banana->get_color();

?>

<?php 
echo "<h2> PHP - The $ this Keyword </h2> The $ this keyword reference to the current object, and is only available inside  method. <br> ";
?>

<?php 
echo "<h2> PHP - instanceof </h2> You can use the instanceof keyword to check if an object belongs to a specific class: <br> ";
?>
<!DOCTYPE html>
<html>
<body>

<?php
class Fruits {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruits();
var_dump($apple instanceof Fruit);
?>
 
</body>
</html>
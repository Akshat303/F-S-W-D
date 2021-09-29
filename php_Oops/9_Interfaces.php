<?php 
echo "<h2> Interfaces </h2>
<h3> Interfaces allow you to specify what method a class should implement. <br>
Interfaces makes it  easy to use a variety of different classes in the same way. Whrn one or more classes use the same interface, it is referred to as 'Polymorphism'. <br>
Interfaces are declared with the interface Keyword: <br>
Syntax <br>
interface InterfaceName { <br>
    public function someMethod1(); <br>
    public function someMethod2($ name, $ color); <br>
    public function someMethod3() : string; <br>
  }
</h3>"
?>
<?php 
interface Animal {
    public function makeSound();
}
class cat implements animal {
    public function makeSound()
    {
        echo "Meow";
    }
}
$animal = new cat();
$animal->makeSound();
?>

<!DOCTYPE html>
<html>
<body>

<?php
// Interface definition
interface Animals {
  public function makeSound();
}

// Class definitions
class Cats implements Animals {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animals {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animals {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cats();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}
?>
 
</body>
</html>

<?php
echo "<h2> What are Abstract classes and method </h2> 
<h3> Abstract classes and method are when the parent class has a named method, but need its class (es) to fill out the tasks. <br> 
An abstract class that contains at least one  absract method . An abtract method is a method is tha is declared, but not implemented in the code. <br> 
Syntax <br>
abstract class ParentClass { <br>
    abstract public function someMethod1(); <br>
    abstract public function someMethod2($ name, $ color); <br>
    abstract public function someMethod3() : string; <br>
  }</h3>";
?>
<!-- Example  -->
<?php 
// Parent class 
abstract class car {
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro() : string;
}
// Child Classes
class Audi extends car {
    public function intro(): string
    {
        return "Choose German quality ! I'm an $this->name ! ";
    }
}
class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
  }
  
  // Create objects from the child classes
  $audi = new audi("Audi");
  echo $audi->intro();
  echo "<br>";
  
  $volvo = new volvo("Volvo");
  echo $volvo->intro();
  echo "<br>";
  
  $citroen = new citroen("Citroen");
  echo $citroen->intro();

  echo "<br> <br>";
  ?>

<!DOCTYPE html>
<html>
<body>

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>"; 
echo $class->prefixName("Jane Doe");
echo "<br> <br>";
?>
 
</body>
</html>

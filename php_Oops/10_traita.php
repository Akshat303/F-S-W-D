<?php 
echo "<h4> Php only support single inheritance: a child can inherit only from one single parents. <br> 
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem. <br>
Traits are used to declared method that can be used in multiple classes. Traits can have method and abstract method that can be used in multiple classes, and the method can have any access modifier (public, private, or protected). <br>
Traits are declared with the trait Keyword: <br>
Syntax <br>
trait TraitName {    }  <br> 
To use a trait in a class, use the use Keyword: <br>
syntax <br>
class MyClass { <br>
    use TraitName; <br>
} 
</h4>";
?>

<!DOCTYPE html>
<html>
<body>

<?php
trait message1 {
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome();
$obj->msg1();
?>
 
</body>
</html>

<?php 
echo "<h2> using Multiple Traits </h2>";

trait messages1 {
    public function msg1(){
        echo "OOP is fun Again ";
    }
}
trait messages2 {
    public function msg2(){
        echo "OOP is fun  double Again ";
    }
}
class Welcomes {
    use message1;
}
class Welcomes2 {
    use message1 ,messages2;
}

$obj = new Welcomes();
$obj->msg1();
echo "<br>";

$obj2 = new Welcomes2();
$obj2->msg1();
$obj2->msg2();
echo "<br>";

?>

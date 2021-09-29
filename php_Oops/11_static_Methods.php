<?php 
echo "<h2> Static method </h2>
<h3> Static method can  be called directly -Without creating an instance of the class first. <br>
Static method are declared with the static keyword: <br>
Syntax <br>
class ClassName { <br>
    public static function staticMethod() { <br>
        } <br>
    }  <br> 
    To access a static method use the class name, double  colon (: :), and the method name: <br>
    syntax <br>
    ClassName : : staticMethod();</h3>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Method</title>
</head>
<body>
    <?php
    class greeting {
        public static function welcome (){
            echo "Hello World!";
        }
    }

    //call static method 
    greeting::welcome();
    ?>
</body>
</html>

<?php 
echo "<h3> More on static method </h3>
<h4> A class can have both static and non-static method. Astatic method can be accessed from a method in the same class using the self Keyword and double colon (::):  </h4>";
?>
<?php 
class greet {
    public static function well(){
        echo "Hello Hello";
    }
    public function __construct(){
        self::well();
    }
}
new greet();
echo "<br> <br> ";
?>


<?php 
echo "<h4>Static methods can also be called from methods in other classes. To do this, the static method should be public: </h4>";
?>
<?php
class greetings {
  public static function welcome() {
    echo "Welcome the red world!";
  }
}

class SomeOtherClass {
  public function message() {
    greetings::welcome();
  }
}
?>
<?php 
echo "<h3>  to call a static method from a child class, using the parent keyword inside the child class. Here, the static method can be public or protected. </h3>"
?>
<?php 
class domain {
    protected static function getWebsiteName() {
      return "Welcome the black world";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    public function __construct() {
      $this->websiteName = parent::getWebsiteName();
    }
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;
  ?>
<?php
echo "<h2> PHP OOP - Static Properties </h2> 
<h3> Static properties can be called directly -  Without creating an instance of a class. <br>
Static properties are declared with the static keyword: <br>
Static properties are declared with the static keyword : <br>
Syntax: <br>
class ClassName { <br>
    public static $ staticProp = 'Hello Akshat'; <br>
}  <br> <br> 
To access a static property use the class name, double colon (::), and the property name: <br> <br>
Syntax : <br>
ClassName::staticProp;</h3>";
?>

<?php
class pi {
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
echo "<br> <br>";
?>

<?php 
echo "<h2> PHP - More on static Properties </h2> <br> 
<h3> A class can have both static and non-static prpoerties. A static property can be accessed from a method in the same class using the self keyword and double colon (::) : </h3>";
class pii{
    public static $value=3.14159;
    public function staticValue(){
        return self::$value;
    }
}
 $pii = new pii();
 echo $pii->staticValue();

 echo "<br> <br>";
?>


<?php 
echo "<h3> To call a static property from a child class, use the parent keyword inside the child class:</h3>";
class piii {
    public static $value=3.14159;
  }
  
  class x extends piii {
    public function xStatic() {
      return parent::$value;
    }
  }
  
  // Get value of static property directly via child class
  echo x::$value;
  
  // or get value of static property via xStatic() method
  $x = new x();
  echo $x->xStatic();

 echo "<br> <br>";
?>
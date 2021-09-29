<?php 
echo "<h2> Access Modifiers </h2>
<h3> There are three access modifiers : <br>
1. public - The property or method can be accessed from everywhere. This is default. <br>
2. protected - The property or methd can be accessed with in the class and by classes derived from that class. <br>
3. private - The property or method can ONLY be accessed with i the class. </h3>"
?>

<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_weight($n) { // a private function
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); // OK
$mango->set_color('Yellow'); // ERROR
$mango->set_weight('300'); // ERROR
?>
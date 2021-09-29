<?php 
echo "<h2> PHP class Constants </h2> 
<h3> Constant can't be changed once i is declared. <br>
Class constant is declared inside a class wih the const ketword. <br>
class constant are case-sensitive . HowEver, it is recommended to name the constant in all upercase letters. <br>
We can ax=ccess a constant from outside the class by using the class name following by the scope resolution operator ( : : ) following the constant name . </h3>";
?>
example

<?php 
class Goodbye {
    const LEAVING_MESSAGE = "Thank you for visiting our company !";

}
echo Goodbye :: LEAVING_MESSAGE;
echo "<br> <br>";
?>

<?php 
echo "<h3> We can access a constant from  inside the class by using self keyword following by the scop resolution operator ( : : )  following by the constant name . </h3>";

class Helloboy {
    const LEAV_MSG = "Thank you for comming my house in this year ! ";
    public function hello(){
        echo self :: LEAV_MSG;
    }
}
$Helloboy = new Helloboy();
$Helloboy->hello();
?>
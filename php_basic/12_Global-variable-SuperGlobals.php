<?php 
echo "<h2> PHP Global Variables - Superglobals</h2> <h3> Some predefined variables in PHP are 'superglobals', which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
 </h3>"
?>

<!-- PHP Superglobal - $GLOBALS -->
<!-- PHP $GLOBALS -->
<?php
$x = 75;
$y = 25;
 
function addition() {
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;

echo"<br> <br>";
?>

<!-- PHP Superglobal - $_SERVER -->
<!-- PHP $_SERVER -->
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

echo"<br><br>";
?>

<!-- PHP Superglobal - $_REQUEST -->
<!-- PHP $_REQUEST -->

<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_REQUEST['fname']);
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo "<br> <br>"
?>

</body>
</html>

<!-- PHP Superglobal - $_POST -->
<!-- PHP $_POST -->
<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
echo "<br> <br>";
?>

</body>
</html>

<!-- PHP Superglobal - $GET -->
<!-- PHP $_GET -->
<!-- $_GET can also collect data sent in the URL. -->
<!DOCTYPE html>
<html>
<body>

<a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>


</body>
</html>
<?php
echo "<h2> Cookies </h2> 
<h3>A cookies is often used to identify a user. A cookies is a small file that the servies embeded on the user's  computer . Each  times the same computer request a page with a browser , it will sent the cookies too.  With the PHP , You can both create  a retrieve cookies values. </h3> 
<h4> Create Cookies with php </h4> 
<h5>A cookies is created with the setcookies( ) function. <br> 
syntax <br> 
setcookies(name, value, expire, path, domain, secure, httponly) </h5> <br> <br>";
?>

<?php
echo "<h2> Session </h2>
<h3> A session is a way to store information (in variable) to be used across multiple pages.
<br> unlike a coolies, the information is not stored on the user  computer. <br>
What is a PHP session? <br>
When you work with an application , tou open it , do , some , changes, and then you close it. This is much like a session. The computer known who you are. It known when you start the application and when you end.  But one the internet there is one problem : The web server does not know who are you  or what you do , because the HTTP address doesn't maintain state. <br>
Session variables solve theis problem by storing user information  to be used across multiple pages (e.g . username , favorit color, etc). By default , sesion   variable  last untile  the user close the browser. <br>
So; Session variable hold information about one single user , and are a variable to all page in one application.  <br> <br> 
Start a PHP sesion variable. <br>
A sesion is started with the session_start( ) function <br> 
Sesion variable are set With the PHP variable : $ _ SESSION. </h3>";
?>
<?php
// Start the session
session_start();
?>
<!-- <!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
// $_SESSION["favcolor"] = "green";
// $_SESSION["favanimal"] = "cat";
// echo "Session variables are set.";
// echo "<br> <br> ";
?>

</body>
</html> -->

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";


?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
  
<?php 
echo "<h3> Create a user define  Function in PHP </h3>";
function writeMsg(){
    echo "Hello World !";
}
writeMsg(); //call function
?>

<?php 
echo "<h3> PHP Function Arguments </h3>";
function fiNam($fname , $year){
    echo "$fname Srivastava. Born in $year <br>";
}
fiNam("Akshat", "2000");
fiNam("Rohan", "1997");
fiNam("Amit", "1998");
fiNam("Annu" , "1999");
fiNam("Raksha", "2021");

echo "<br> <br>";

?>

<?php 
echo "<h4> PHP is a Loosely Typed Language </h4>";
function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, "5 days");
  // since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
  echo "<br> <br>";
?>
</body>
</html>
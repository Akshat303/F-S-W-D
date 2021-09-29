<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loop</title>
</head>
<body>
    <?php
    echo "<h4> While loop </h4>";
    $x = 1;
    while ($x <=5){
        echo " The number is $x <br>";
        $x++;
    }

    echo "<br> <br>";
    ?>

<?php
    echo "<h4> Do While loop </h4>";
    $x = 1;
    do {
        echo "the number is : $x <br>";
        $x++;
    }
    while ($x <= 10);
    while ($x >= 10); // Wrong statement but the loop is run one time because using do while loop
    echo "<br> <br>";
    ?>

 <?php
    echo "<h4> for loop </h4>";
    for ($x =0; $x <= 10; $x++) {
        echo " The number is : $x <br>";
    }
    echo "<br> <br>";
    ?> 

<?php
echo "<h4> foreach loop </h4>";
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>


</body>
</html>
<?php
namespace Html;
echo "<h2> PHP NameSpaces</h2>
<h3>Namespaces are qualifiers that solve two different problems: <br>

   1. They allow for better organization by grouping classes that work together to perform a task . <br>
   2.  They allow the same name to be used for more than one class. <br>
   Declaring a Namespace. <br>
   Namespaces are declared at the beginning of a file using the namespace keyword: <br>
   syntax. <br>
   Declare a namespace called HTMML: <br> 
   namespace Html; <br>
   Note: A namespace declaration must be the first thing in the PHP file. The following code would be invalid: <br></h3>";
?>


<?php

// namespace Html; this is use n first then rest of the code.

class Table
{
    public $title = "";
    public $numRows = 0;
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
    }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>

<body>

    <?php
    $table->message();
    ?>

</body>

</html>
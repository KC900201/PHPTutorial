<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial to PHP</title>
</head>
<body>
    <!--PHP tag-->
    <?php 
        echo("Hello World\t"); // PHP instruction to print out language
        echo "Hello World without ()";
        echo "<h1>Hello World</h1>"; // render html with php
        echo "<h2>Welcome to KC PHP</h2>";
        echo "<p>This is a paragraph</p>";
    ?>
    <br />
    <?php
        // PHP variables
        // Use $ sign to declare a variable in PHP
        $characterName = "Jean";
        $age = 34; 
        echo "<p>My name is $characterName </p>";
        $age = 30; // update variables midway
        echo "<p>I am $age years old.</p>";

        // Variable type
        $bool = true;
        $int = 233;
        $float = 123.233;
        $string = "Long";

        if($bool) { // conditional statements
            $int += $float;
            echo $int;
            echo strtoupper($string[3]);
            echo str_replace("L", "Schl", $string);
        } 

        echo  substr($string, 0, 2);
    ?>
    <br />
    <?php
        // Number operations
        $int = 30.999232;

        $int++;
        echo $int;
        echo "\n";
        echo $int*5;
        echo "\n";
        echo ceil($int);
        echo "\n";
        echo floor($int);
        echo "\n";
        echo sqrt($int);
    ?>

</body>
</html>
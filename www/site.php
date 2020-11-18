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
    <br />
    <!--php user input -->    
    <div>
        <form action="site.php" method="get">
            Name: <input type="text" name="userName">
            Number 1: <input type="number" name="num1">
            Number 2: <input type="number" name="num2">
            <input type="submit">
        </form>
    </div>
    <?php
            echo $_GET["userName"]; // GET the data from the input tag (HTTP get)
            echo "<br>";
            echo $_GET["num1"] + $_GET["num2"]; // Performing operation using data input
    ?>
    <div>
        <form action="site.php" method="post">
            Color: <input type="text" name="color">
            Plural: <input type="text" name="plural">
            <input type="submit">
        </form>
    </div>
    <?php
        // retrieve data from HTTP POST
        $color = $_POST["color"]; // post method - does not leave variable in URL parameter
        $plural = $_POST["plural"];
        $inputs = array($color, $plural); // PHP array declaration

        echo "Violets  are $inputs[0]"; // accessing array element
        echo "<br>";
        echo "$inputs[1] are blue"; 
    ?>
    <br />
    <!--Retrieve value from checkboxes PHP-->
     <div>
        <form action="site.php" method="post">            
            Apple: <input type="checkbox" name="fruits[]" value="apple">
            Durian: <input type="checkbox" name="fruits[]" value="durian">
            Orange: <input type="checkbox" name="fruits[]" value="orange">
            <input type="submit">
        </form>
    </div>
    <?php
        // retrieve data from HTTP POST
        $fruits = $_POST["fruits"]; // this is to retrieve an array value from POST

        // Declaring associative arrays
        $grades = array("Jim"=>"A+", "Pam"=>"B-", "Jack"=>"A-"); // storing a key mapped (=>) to value pair

        // Function declar in PHP
        function dispResult($array) {
            for ($i = 0; $i < count($array); $i++) {
                echo $array[$i];
            }
        }

        echo "$fruits[1]";
        echo $grades["Jim"];
        echo $grades["Pam"];
        $grades["Pam"] = "A*";
        echo $grades["Pam"];
        echo count($grades);
        dispResult($fruits);
    ?>


</body>
</html>
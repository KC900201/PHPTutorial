<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial to PHP</title>
</head>
<body>
    <!--PHP tag-->
    <!--Include statements php && html-->
    <?php 
        include "header.html" // include html file
    ?>
    <?php 
        $title = "PHP include post";
        $author = "Mike";
        $wordCount = 4000;
        include "article-header.php"; // input the values in the include php file

        sayHi($author);
        echo $a; // Using variable from header file (php)
    ?>
    <h1>Hello World! Today's date is <?php echo date('jS \o\f F Y'); ?></h1>
    <!--
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
    -->
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
                echo "$array[$i] ";
            }
        }
        // in line comment in php
        /*
        echo "$fruits[1]";
        echo $grades["Jim"];
        echo $grades["Pam"];
        $grades["Pam"] = "A*";
        echo $grades["Pam"];
        echo count($grades);
        */
        dispResult($fruits);
    ?>
    <!--Classes & Object declaration-->
    <br />
    <?php
        // Class declaration
        class Book{
            // declare attr
            private $title; // var is same as public keyword (accessible by other php page)
            public $author;
            public $pages;
            private $rating;
            private $publisher;
            private $ratings = array("G", "PG", "PG13", "NR", "18SX");

            // contructor
            /*
            function __construct() {
                echo "New book created <br>";
            }
            */
            // constructor w/ parameter, so constructor cannot be redeclared
            function __construct($aTitle, $aAuthor, $aPages, $aPublisher) { 
                echo "New book created <br>";
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
                $this->publisher = $aPublisher;
            }
            /* Getters and Setters */
            function getTitle() {
                return $this->title;
            }

            function setTitle($title) {
                $this->title = $title;
            }

            function getPublisher() {
                return $this->publisher;
            }

            function setPublisher($publisher) {
                $this->publisher = $publisher;
            }

            function getRating() {
                return $this->rating;
            }

            function setRating($rating) {
                if(in_array($rating, $this->ratings)) {
                    $this->rating = $rating;
                } else {
                    echo "Error, invalid rating!";
                }
            }

            // Object functions (accessible by all objects)
            function evalBook() {
                if($this->pages > 1000) {
                    echo "This book has more than 1000 pages: ".$this->pages."<br>";
                } else if ($this->pages <= 1000 && $this->pages > 500) {
                    echo "This book has more than 500 pages: ".$this->pages."<br>";
                } else {
                    echo "This book has less than or equal to 500 pages";
                }
            }

            function dispBook() {
                echo "Book title: ".$this->getTitle()."<br>";
                echo "Book author: ".$this->author."<br>";
                echo "Book pages: ".$this->pages."<br>";
                echo "Book publisher: ".$this->getPublisher()."<br>";        
            }
        }

        // Class inheritance (OOP concept)
        class Magazine extends Book {

            // try method overwriting
            function dispBook() {
                echo "Magazine title: ".$this->getTitle()."<br>";
                echo "Magazine author: ".$this->author."<br>";
                echo "Magazine pages: ".$this->pages."<br>";
                echo "Magazine publisher: ".$this->getPublisher()."<br>";        
                echo "Magazine rating: ".$this->getRating()."<br>";
            }
        }

        // Declare object
        $book1 = new Book("PHP", "JK Rowling", 999, "WordPress");
        //$book1->publisher = "The Star"; // cannot edit attr outside class when set as private
        $book1->setTitle("Harry Potter"); // setter functions, also can be used outisde class using private attr
        $book2 = new Book("Lord of The Rings", "JR Tolkien", 5999, "WordPress");
        $book2->setRating("PG");

        $book2->dispBook(); // use -> as pointer in PHP programming
        $book2->evalBook(); // use -> as pointer in PHP programming
        echo $book2->getRating()."<br>";
        $book1->dispBook(); // use -> as pointer in PHP programming
        $book1->evalBook(); // use -> as pointer in PHP programming

        // Inheritance object
        $mag1 = new Magazine("JSAI", "Atsumi Masayasu", 780, "JSAI Wordings");
        $mag1->setRating("PG");
        $mag1->dispBook();
        $mag1->evalBook();

    ?>
    <!--Include statements php && html-->
    <?php 
        include "footer.html"
    ?>
</body>
</html>
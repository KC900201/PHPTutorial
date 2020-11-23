<h1>
    <?php
        echo $title;
    ?>
</h1>
<h3>
    <?php 
        echo $author;
        $a = "Testing header";
        
        function sayHi($author) {
            echo "\r\n Hello $author";
        }
    ?>
</h3>

word count: <?php echo $wordCount; ?>
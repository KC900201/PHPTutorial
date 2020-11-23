<!DOCTYPE html>
<?php 
    // store session data
    session_start(); 
    $_SESSION['VarName'] = 'session variable!';
?> <!--Must start before html section-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP session</title>
</head>
<body>
    <p>Test PHP session</p>
    <!--Test retrieve session data-->
    <?php 
        //retrieve session data
        if(isset($_SESSION['VarName'])) // check if variable is set && not NULL
            echo $_SESSION['VarName'];
        else {
            $_SESSION['views'] = 1;
            echo "set session variable";
        }
    ?>
    <?php 
        include "footer.html"
    ?>
    <!--Destroy session-->
    <?php
        session_destroy();
    ?>
</body>
</html>

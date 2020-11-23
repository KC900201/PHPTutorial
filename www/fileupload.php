<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Upload</title>
</head>
<body>
    <form action="fileupload.php" method="post" enctype="multipart/form-data">
        <label for="file"></label>
        <input type="file" name="file" id="file">
        <br />
        <input type="submit" name="submit" value="Submit">
    </form>    
    <!--Create a script to process the uploaded file-->
    <?php 
        if ($_FILES["file"]["error"] > 0) {
            echo "Error: ".$_FILES["file"]["error"]."<br>";
        }
        else {
            echo "Upload: ".$_FILES["file"]["name"]."<br>";
            echo "Type: ".$_FILES["file"]["type"]."<br>";
            echo "Size: ".($_FILES["file"]["size"]/1024)."kB<br>";
            echo "Stored in: ".$_FILES["file"]["tmp_name"];
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="endT.php" method="get">
        <input type="text" name="fname" id="fname" placeholder="Full Name">
        <br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if(isset($_GET["fname"])){
        $name = $_GET["fname"];
        if(count(explode(" ", $name)) < 2){
            echo "Name must be composed of at least 2 words";
        } else{
            echo "<i>Hello $name</i>";
        }
    }
    ?>
</body>
</html>
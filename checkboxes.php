<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Choose your favourite fruit</p>
<form action="checkboxes.php" method="post">
    <!--    The name atteibute should be the same as it allows u to group the checkboxes-->
    Apple: <input type="checkbox" name="fruits[]" value="apple"> <br>
    banana: <input type="checkbox" name="fruits[]" value="banana"> <br>
    pear: <input type="checkbox" name="fruits[]" value="pear"> <br>
    <input type="submit" value="submit">


</form>
<?php
$fruits = $_POST["fruits"];
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}
?>
</body>
</html>
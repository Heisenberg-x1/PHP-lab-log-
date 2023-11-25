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
<h3>Functions</h3>
<br>
<?php
function sayHi($name)
{
    echo "Hello $name" . "<br>";
}

sayHi("Mike");
sayHi("James");
sayHi("Joan");

function compute($num){
    $result = pow($num, 3) + pow($num, 3);
    return $result;
}
echo "Param 4 equals: " . compute(4);
?>

<?php
$isMale = true;
if($isMale){
    echo "Male";
}else{
    echo "female";
}
function getMax($num1, $num2)
{
    if($num1 > $num2){
        return $num1;
    }
    return  $num2;
}
echo "Biggest: " . getMax(34,67);
?>


</body>
</html>
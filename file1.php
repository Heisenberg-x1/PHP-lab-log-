<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-journey</title>
</head>
<body>
    <?php
    echo  "<h1>Header with echo</h1>";
    echo "<hr/>";
    echo "<p>Paragraph inside echo</p>";
    echo "<h3>Variables</h3>";
    $name = "Nerd42";
    $age = 22;
    echo "I am $name and age is $age <br />";
    $name = "nerd44";
    echo "I changed my name to $name <br>";
    $isMale = True;
    echo var_export($isMale, True);
//    String and string methods
    echo "<br>";
    $text = "This is a random string ";
    echo $text;
    echo "<br>". strtolower($text);
    echo "<br>" . strtoupper($text);
    echo "<br> Length: " . strlen($text);
    echo "<br> Substring with len 5: " . substr($text, 10, 5);
    echo $text[2];
    $text[2] = "B";
    echo "<br>" . $text;
    $text = str_replace("random", "changed", $text);
    echo "<br>" . $text;

//    Numbers
    echo "<br>Working with numbers";
    echo "<br>". (12 + 45);
    echo "<br>10 % 3: " . (10 % 3);

    $num = 100;
    $num++;
    echo "<br>" . $num;
//    Math Functions
    echo "<br>Sqrt: " . sqrt($num);
    echo "<br>Round: " . round(sqrt($num));
    echo "<br>Floor: " . floor(sqrt($num));
    echo "<br>Ceil: " . ceil(sqrt($num));
    echo "<br>Random num btwn 1 & 100: " . rand(1,100);
    echo "<br>min of 2 and 45: " . min(2,45);
    ?>

</body>
</html>
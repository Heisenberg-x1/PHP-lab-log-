<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            display: grid;
            place-items: center;
            width: 100dvw;
            height: 100dvh;
        }

        form {
            width: max-content;
            height: 30dvh;
            border: 1px solid tomato;
            border-radius: 10px;
            padding: 20px;
        }
    </style>
</head>
<body>
<!--We can also edit the values of num1 and num2 from the address bar-->
<form action="calculator.php" method="post">
    <input type="number" name="num1" placeholder="Enter first number">
    <br>
    <br>
    <input type="number" name="num2" placeholder="Enter the second number">
    <br>
    <br>
    <input type="submit" value="calculate">
    <?php
    $result = $_POST["num1"] + $_POST["num2"];
    echo "<p>Result: $result</p>"
    ?>
</form>

</body>
</html>
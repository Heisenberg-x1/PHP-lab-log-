<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            display: grid;
            place-items: center;
            width: 100dvw;
            height: 100dvh;
        }

        form {
            width: max-content;
            height: 40vh;
            border-radius: 5px;
            border: 1px solid tomato;
            display: flex;
            color: tomato;
            flex-direction: column;
            align-items: flex-start;
            padding: 25px;
        }
    </style>
    <title>Document</title>
</head>
<body>
<form action="calculatorV2.php" method="post">
    Num1: <input type="number" step="0.01" name="num1" placeholder="Enter num1">
    <br>
    Operator: <input type="text" name="op" placeholder="Operator: +,-,* or /">
    <br>
    Num2: <input type="number" step="0.01" name="num2" placeholder="Enter num2">
    <br>
    <input type="submit" value="calculate">
    <br>
    <br>
    <?php
    if(isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["op"])){
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $op = $_POST["op"];
        $result = null;

        if($op == "+") {
            $result = $num2 + $num1;
        } else if ($op == "-"){
            $result = $num1 - $num2;
        } else if ($op == "/"){
            $result = $num1 / $num2;
        } else if ($op == "*"){
            $result = $num2 * $num1;
        } else{
            $result = "Invalid operator";
        }
        echo "<p>Result: $result</p>";

    }

    ?>

</form>

</body>
</html>
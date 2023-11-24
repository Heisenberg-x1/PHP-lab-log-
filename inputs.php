<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            width: 100dvw;
            height: 100dvh;
            display: grid;
            place-items: center;
        }
        form{
            width: max-content;
            height: 30%;
            border: 1px solid gold;
            border-radius: 8px;
            padding: 20px 30px;
        }
        input[type="submit"]{
            margin: 0 30%;
        }
    </style>
</head>
<body>
    <div class="container">
        <form action="inputs.php" method="get">
            Name: <input type="text" name="name">
            <br>
            <br>
            Age: <input type="number" name="age">
            <br>
            <br>
            <input type="submit" value="Submit">

            <?php
            echo  "Hello " . $_GET["name"] ;
            echo "<br>" . "you ar " . $_GET["age"] . " years old";

            ?>
        </form>


    </div>
</body>
</html>
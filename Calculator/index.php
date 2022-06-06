<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .center {
        margin: auto;
        width: 60%;
        border: 3px solid #73AD21;
        padding: 10%;
    }

    input {
        padding: 8px;
        border-radius: 6px;
        width: 100px;
    }

    button {
        background-color: #73AD21;
        color: white;
        padding: 12px;
        border-radius: 12px;
    }
</style>

<body>

    <form action="" method="get">
        <div class="center">
            <h1>Calculator</h1>

            <div>
                <input type="text" name="num1" id="">
                <input type="text" name="sign" id="">
                <input type="text" name="num2" id="">

                <button type="submit">Enter</button>
            </div>

        </div>


    </form>


    <?php

    $a = $_GET['num1'];
    $sign = $_GET['sign'];
    $b = $_GET['num2'];

    if ($sign == '+') {
        echo $a + $b;
    }
    if ($sign == '-') {
        echo $a - $b;
    }
    if ($sign == '/') {
        echo $a / $b;
    }
    if ($sign == '*') {
        echo $a * $b;
    }


    ?>

</body>

</html>
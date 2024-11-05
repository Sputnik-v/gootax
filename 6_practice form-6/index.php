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
<form action="" name="form" method="POST">
    <input name="num1" type="number">
    <input name="num2" type="number">
    <input name="num3" type="number">
    <button type="submit">send</button>

    <?php



    function isTruePif($a, $b, $c){
        $m = max($a, $b, $c);
        if (2*$m**2 == $a**2 + $b**2 + $c**2) {
            echo "Тройка Пифагора";
        }else{
            echo "Не Тройка Пифагора";
        }
    }

    if (!empty($_POST)){
        if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){
            $a = (int) $_POST['num1'];
            $b = (int) $_POST['num2'];
            $c = (int) $_POST['num3'];
            isTruePif($a, $b, $c);
        }else{
            echo "Не введено одно из чисел";
        }
    }


    ?>
</form>
</body>
</html>


<?php

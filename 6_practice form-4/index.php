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
<form action="" method="POST">
    <input name="num1" type="number">
    <input name="num2" type="number">
    <button>send</button>
</form>
    <?php
    function findDivisors($number) {
        // Инициализация массива для хранения делителей
        $divisors = array();

        // Итерируемся от 1 до квадратного корня из числа
        for ($i = 1; $i * $i <= $number; $i++) {
            // Если $i является делителем, добавляем его в массив
            if ($number % $i == 0) {
                // Добавляем делитель
                $divisors[] = $i;

                // Если квадрат текущего делителя не равен числу, то добавляем и второй делитель
                if ($i * $i != $number) {
                    $divisors[] = $number / $i;
                }
            }
        }

        sort($divisors);

        // Возвращаем массив делителей
        return $divisors;
    }

    if(!empty($_POST)) {
        if (isset($_POST['num1']) && isset($_POST['num2'])){
            $num1 = (int) $_POST['num1'];
            $num2 = (int) $_POST['num2'];
            $getArrNum1 = findDivisors($num1);
            $getArrNum2 = findDivisors($num2);
            //$mergeArray = array_merge($getArrNum1, $getArrNum2);

            $identArray = array_intersect($getArrNum2, $getArrNum2);
            //$uniqArray = array_unique($mergeArray);

            foreach ($identArray as $num){
                echo $num . "\n";
            }
        }
    }



    ?>
</body>
</html>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>factorial</title>
</head>
<body>
<form action="" method="POST">
    <label for="input">Введите число</label>
    <input id="input" name="input" type="number">
    <button type="submit">Показать</button>
</form>
<?php

/////////////////// 2 /////////////////////////
//function convert( $celsius) {
//    return ((int) $celsius * 9/5) + 32;
//}
//
//if(!empty($_POST)) {
//    if (isset($_POST['input'])) {
//        if($_POST['input'] === ""){
//            echo "empty input";
//            return;
//        }
//        echo convert($_POST['input']);
//    }
//}

?>

<?php
////////////////// 1 //////////////////////////
//error_reporting(-1);
//function getFactorial($n)
//{
//    if ($n == 0)
//    {
//        return 1;
//    }
//    else
//    {
//        return $n * getFactorial($n - 1);
//    }
//}
//
//$num = $_POST['input'];
//
//if(!empty($_POST)){
//    $factorial = getFactorial((int) $num);
//    echo $factorial;
//}

?>

<?php
/////////////////// 3 /////////////////////////
//function getDivisors($n) {
//    $arr = [];
//    for ($i = 1; $i <= $n; $i++) {
//        if ($n % $i == 0) {
//            $arr [] = $i;
//        }
//    }
//    return $arr;
//}
//
//if(!empty($_POST)){
//    if(isset($_POST['input'])){
//        $arr = getDivisors((int)($_POST['input']));
//        foreach ($arr as $item){
//            echo "{$item} \n";
//        }
//    }
//}
?>


</body>
</html>



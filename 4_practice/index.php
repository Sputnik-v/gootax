<?php
/////////////////Циклы////////////////

//1
$i = 0;

while($i <= 100){
    echo $i . "\n";
    $i++;
}

//2

$i = 100;

while($i >= 0){
    echo $i . "\n";
    $i--;
}

//3
for ($i = 1; $i <= 100; $i++) {
    if($i % 2 == 0){
        echo $i . "\n";
    }
}

//4
$i = 0;
$arr = [];
while($i <= 10){
    $arr[$i] = 'x';
    $i++;
}

//5
$i = 0;
$arr = [];
while($i <= 10){
    $arr[$i] = $i;
    $i++;
}

//6
$arr = [1, 3, 4, 6, 3, 6, 10];

foreach ($arr as $elem){
    if($elem > 0 && $elem < 10){
        echo $elem;
    }
}

//7
$arr = [1, 3, 4, 5, 6, 3, 6, 10];

foreach ($arr as $elem){
    if($elem === 5){
        echo "Have 5";
    }
}

//8
$arr = [1, 3, 4, 5, 6, 3, 6, 10];
$sum = 0;
foreach ($arr as $elem){
    if(is_numeric($elem)){
        $sum += $elem;
    }else{
        echo "not int";
        return;
    }
}
echo $sum;

//9
$arr = [1, 3, 3];
$sum = 0;
foreach ($arr as $elem){
    if(is_numeric($elem)){
        $sum += $elem * $elem;
    }else{
        echo "not int";
        return;
    }
}
echo $sum;

//10
$arr = [5,5,5,5];
$sum = 0;
foreach ($arr as $elem){
    $sum += $elem;
}
$average = $sum / count($arr);
echo $average;

//11
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    $factorial = $i * $n;
}
echo $factorial;
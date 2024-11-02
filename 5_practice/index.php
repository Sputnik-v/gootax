<?php
//////////////////Functions///////////////////

//1
function getDivisors($n) {
    $arr = [];
    for ($i = 1; $i <= $n; $i++) {
        if ($n % $i == 0) {
            $arr [] = $i;
        }
    }
    return $arr;
}

//2
function getCommonDivisors($num1, $num2) {
    return array_intersect(getDivisors($num1), getDivisors($num2));
}

//3
function getSum($number){
    return array_sum(str_split($number));
}

//4
function getStringDay($dow_numeric){
    $dow_text = date('D', strtotime("Sunday +{$dow_numeric} days"));
    return $dow_text;
}

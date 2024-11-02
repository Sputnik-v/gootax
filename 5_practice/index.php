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


//5
$dates = ['2016-12-15', '2016-12-25', '2017-01-26'];
$days = [
    'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
    'Четверг', 'Пятница', 'Суббота'
];
foreach($dates as $d){
    print_r([
        'date' => $d,
        'dayOfWeek' => $days[ date("w", strtotime($d) )]
    ]);
}

//6
function calcTime($s) {

    return floor($s / 86400);
}

//7
function is_leap_year($year) {
    // Получаем количество дней в феврале заданного года
    $days = date("t", strtotime("$year-02-01"));
    // Если дней 29, то год високосный
    return $days == 29;
}

//8
function primeCheck($number) {
    if ($number == 1) return 0;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) return 0;
    }
    return 1;
}
<?php
////////////////if else////////////////////

//1
$month = null;
if($month === 1 || $month === 2 || $month === 12 ){
    return "зима";
} elseif ($month > 2 && $month < 6) {
    return "весна";
} elseif ($month > 5 && $month < 9) {
    return "лето";
} else {
    return "осень";
}

//2
$str = 'abcde';
if($str[0] === 'a'){
    return "this is 'a'";
}else{
    return "not 'a'";
}

//3
$strNum = '12345';
if($strNum[0] === '1' && $strNum[1] === '2' && $strNum[2] === '3'){
    return '123';
}else{
    return 'not 123';
}

//4
$numStr = '123';
$num = $numStr[0] + $numStr[1] + $numStr[2];

//5
$stringNumber = '123123';
if($stringNumber[0] + $stringNumber[1] + $stringNumber[2] === $stringNumber[3] + $stringNumber[4] + $stringNumber[5]){
    return 'yes';
}else{
    return 'no';
}
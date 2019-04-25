<?php

$br = '<br>';

//задание 1

$a = mt_rand(-10,10);
$b = mt_rand(-10,10);

if (($a >= 0) && ($b >= 0)) {
    echo 'a = '.$a.' b = '.$b.' : разность = '.($a - $b);
} elseif (($a < 0) && ($b < 0)) {
    echo 'a = '.$a.' b = '.$b.' : произведение = '.($a * $b);
} else {
    echo 'a = '.$a.' b = '.$b.' : сумма = '.($a + $b);
}
echo $br.$br;


//задание 2

$aa = mt_rand(0,15);
echo 'a\' = '.$aa.$br;
switch ($aa) {
    case 0: echo ' 0';
    case 1: echo ' 1';
    case 2: echo ' 2';
    case 3: echo ' 3';
    case 4: echo ' 4';
    case 5: echo ' 5';
    case 6: echo ' 6';
    case 7: echo ' 7';
    case 8: echo ' 8';
    case 9: echo ' 9';
    case 10: echo ' 10';
    case 11: echo ' 11';
    case 12: echo ' 12';
    case 13: echo ' 13';
    case 14: echo ' 14';
    case 15: echo ' 15';
}
echo $br.$br;


//задание 3

function sum($a, $b) {
    return $a + $b;
}

function sub($a, $b) {
    return $a - $b;
}

function mul($a, $b) {
    return $a * $b;
}

function div($a, $b) {
    if (empty($b)) {
        return 'Деление на ноль!';
    }
    return $a / $b;
}


//задание 4

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'sum': return sum($arg1, $arg2);
        case 'sub': return sub($arg1, $arg2);
        case 'mul': return mul($arg1, $arg2);
        case 'div': return div($arg1, $arg2);
    }
}

echo 'сумма: '.mathOperation($a, $b, 'sum').$br;
echo 'разность: '.mathOperation($a, $b, 'sub').$br;
echo 'произведение: '.mathOperation($a, $b, 'mul').$br;
echo 'деление: '.mathOperation($a, $b, 'div').$br.$br;


//задание 5
// пропускаем


//задание 6

function power($val, $pow) {
    if ($pow > 0) {
        return power($val, $pow - 1) * $val;
    } elseif ($pow < 0) {
        return power($val, $pow + 1) / $val;
    } else
        return 1;
}

echo power(5, 3).$br.$br;


//задание 7
function pluralize($number, $one, $two, $many) {
    $div100 = $number % 100;
    $div10 = $number % 10;
    
    switch ($div100) {
        case 11:
        case 12:
        case 13:
        case 14: return $many;
    }
    
    if ($div10 === 1) {
        return $one;
    }
    
    switch ($div10) {
        case 2:
        case 3:
        case 4: return $two;
    }
    
    return $many;
}

//$hour = mt_rand(0,23);
//$minute = mt_rand(0,59);

$hour = date('G');
$minute = date('i');

echo "$hour ".pluralize($hour,'час','часа','часов')." $minute ".pluralize($minute,'минута','минуты','минут');

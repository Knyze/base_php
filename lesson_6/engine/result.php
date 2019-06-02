<?php
   
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

?>
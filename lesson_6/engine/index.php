<?php

if (isset($_POST)) {
    
    if ($_POST['operation'] !== '' || isset($_POST['operator'])) {
        $operator = $_POST['operation'];
        $operand['1'] = $_POST['operand1'];
        $operand['2'] = $_POST['operand2'];
        $arg = '2';
    } else {
        $operand['1'] = $_POST['operand1'];
        $arg = '1';
    }
    
    
    if (isset($_POST['number'])) {
        $operand[$arg] .= $_POST['number'];
        $display = $operand[$arg];
    } elseif (isset($_POST['operator'])) {
        switch ($_POST['operator']) {
                case 'C': {
                    $display = 0;
                    $operand[$arg] = 0;
                    break;
                }
                case 'sum': {
                    $display = 0;
                    $operator = 'sum';
                    break;
                }
                case 'sub': {
                    $display = 0;
                    $operator = 'sub';
                    break;
                }
                case 'div': {
                    $display = 0;
                    $operator = 'div';
                    break;
                }
                case 'mul': {
                    $display = 0;
                    $operator = 'mul';
                    break;
                }
                case '=': {
                    require ROOT_DIR.'engine/result.php'; 
                    $display = mathOperation(+$operand[1], +$operand[2], $operator);
                    $operator = '';
                    $operand['1'] = '';
                    $operand['2'] = '';
                    break;
                }
        }
    }
    
    $operand1 = $operand['1'];
    $operand2 = $operand['2'];
    
}

?>
 
<?php

if ($_SESSION['admin'] == 1) {
    $queryText = 'SELECT * FROM orders';
    $onChangeStatus = 'onchange="handleChangeStatus(event, <?=$item[\'id\']?>)"';
} elseif ($_SESSION['auth']) {
    $queryText = sprintf('SELECT * FROM orders WHERE user="%s"', $_SESSION['user_name']);
    $onChangeStatus = 'onchange="handleChangeStatus(event, <?=$item[\'id\']?>)"';
} else
    die;


$query = mysqli_query(myDB_connect(), $queryText);

$result = [];

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

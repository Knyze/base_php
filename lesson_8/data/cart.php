<?php

$queryText = sprintf('SELECT cart.id, cart.product_id, cart.quantity, catalog.name, catalog.imgSrc, catalog.price FROM cart JOIN catalog ON cart.product_id=catalog.id WHERE user_id = "%s"', $_SESSION['user_id']);

$query = mysqli_query(myDB_connect(), $queryText);

$result;

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

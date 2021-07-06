<?php

$query = mysqli_query(myDB_connect(), "SELECT cart.id, cart.product_id, cart.quantity, catalog.name, catalog.imgSrc, catalog.price FROM cart JOIN catalog ON cart.product_id=catalog.id");

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

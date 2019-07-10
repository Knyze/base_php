<?php

session_start();

if (!$_SESSION['auth']) {
    die;
}

$userID = $_SESSION['user_id'];
$user = $_SESSION['user_name'];

require 'init.php';

$mysqli = myDB_connect();

$queryTextCart = sprintf('SELECT cart.id, cart.product_id, cart.quantity, catalog.name, catalog.price FROM cart JOIN catalog ON cart.product_id=catalog.id WHERE cart.user_id = "%s"', $userID);

$query = mysqli_query(myDB_connect(), $queryTextCart);

$result = [];

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

if (count($result)==0) {
    die;
}
    

$data = '';
$sum = 0;
$selectedID = [];

foreach ($result as $product) {
    $data .= "{$product['name']}, количество: {$product['quantity']}, цена: {$product['price']}; ";
    $sum += +$product['quantity'] * +$product['price'];
    $selectedID[] = $product['id'];
}

$queryTextOrder = sprintf('INSERT INTO orders (user, data, sum) VALUES ("%s", "%s", "%u")', $user, $data, $sum);

$query = mysqli_query(myDB_connect(), $queryTextOrder);

$queryTextCart = 'DELETE FROM cart WHERE cart.id='.implode(' OR cart.id=', $selectedID);

$query = mysqli_query(myDB_connect(), $queryTextCart);

header('Location: ../index.php');
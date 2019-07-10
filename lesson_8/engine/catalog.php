<?php

session_start();
$userID = $_SESSION['user_id'];

if (!$userID) {
    header('Location: ../index.php');
    die;
}

require 'init.php';

require ROOT_DIR.'engine/cart.php';

if (isset($_POST)) {
    
    if (isset($_POST['product'])) {
        $product = $_POST['product'];
        $mysqli = myDB_connect();
        $query_text = sprintf('SELECT * FROM cart WHERE cart.product_id="%s" AND cart.user_id="%s"  LIMIT 1', $product, $userID);
        $query = mysqli_query($mysqli, $query_text);
        //print_r($query_text);
        
        if ($row = mysqli_fetch_assoc($query)) {
            $result[] = $row;
            //var_dump($result);
            addQuantityToCart($result[0]['id'], $userID);
        } else {
            addToCartProduct($product, $userID);
        }
    }
}

header('Location: ../index.php');

die;

?>
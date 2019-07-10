<?php

require 'init.php';

require ROOT_DIR.'engine/cart.php';

if (isset($_POST)) {
    
    if (isset($_POST['product'])) {
        $product = $_POST['product'];
        $mysqli = myDB_connect();
        $query_text = sprintf('SELECT * FROM cart WHERE cart.product_id="%s" LIMIT 1', $product);
        $query = mysqli_query($mysqli, $query_text);
        //print_r($query_text);
        
        if ($row = mysqli_fetch_assoc($query)) {
            $result[] = $row;
            addQuantityToCart($result[0]['id']);
        } else {
            addToCartProduct($product);
        }
    }
}

header('Location: /lesson_7/index.php');

die;

?>
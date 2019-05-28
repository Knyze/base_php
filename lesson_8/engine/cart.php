<?php

function addToCartProduct($product, $userID) {
    $mysqli = myDB_connect();
    
    $query_text = sprintf("INSERT INTO cart (product_id, user_id, quantity) VALUES (\"%s\", \"%s\", \"%u\")", $product, $userID, 1);
    
    $query = mysqli_query($mysqli, $query_text);
}

function addQuantityToCart($cart_id, $userID, $quantity = 0) {
    $mysqli = myDB_connect();
    if ($quantity === 0) {
        $query_text = sprintf('SELECT * FROM cart WHERE cart.id="%u" AND cart.user_id="%s" LIMIT 1', $cart_id, $userID);
        $query = mysqli_query($mysqli, $query_text);
        if ($row = mysqli_fetch_assoc($query)) {
            $result[] = $row;
        }
        $quantity = $result[0]['quantity'] + 1;
        $query_text = sprintf('UPDATE cart SET quantity="%u" WHERE id="%u"', $quantity, $cart_id);
        $query = mysqli_query($mysqli, $query_text);
    } else {
        $query_text = sprintf('UPDATE cart SET quantity="%u" WHERE id="%u"', $quantity, $cart_id);
        $query = mysqli_query($mysqli, $query_text);
    }
}

function clearCart($userID) {
    $mysqli = myDB_connect();
    $query_text = sprintf('DELETE FROM cart WHERE user_id="%u"', $userID);
    $query = mysqli_query($mysqli, $query_text);
}

?>
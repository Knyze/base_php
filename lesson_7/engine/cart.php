<?php

function addToCartProduct($product) {
    $mysqli = myDB_connect();
    $query_text = sprintf("INSERT INTO cart (product_id, user, quantity) VALUES (\"%s\", \"\", \"%u\")", $product, 1);
    //$query_text = sprintf('INSERT INTO cart VALUES (NULL, "", "%s", "%u")', $product, 1);
    $query = mysqli_query($mysqli, $query_text);
}

function addQuantityToCart($cart_id, $quantity = 0) {
    $mysqli = myDB_connect();
    if ($quantity === 0) {
        $query_text = sprintf('SELECT * FROM cart WHERE cart.id="%u" LIMIT 1', $cart_id);
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

function clearCart() {
    $mysqli = myDB_connect();
    $query_text = 'TRUNCATE TABLE cart';
    $query = mysqli_query($mysqli, $query_text);
}

?>
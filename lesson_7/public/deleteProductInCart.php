<?php

require '../engine/init.php';

if (isset($_GET)) {
    if (isset($_GET['id_cart'])) {
        $mysqli = myDB_connect();
        $query_text = sprintf('DELETE FROM cart WHERE cart.id="%u"', $_GET['id_cart']);
        $query = mysqli_query($mysqli, $query_text);
    }
}

header('Location: /lesson_7/cart.php');

die;

?>
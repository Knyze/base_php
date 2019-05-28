<?php

session_start();
$userID = $_SESSION['user_id'];

require '../engine/init.php';

require ROOT_DIR.'engine/cart.php';

if ($_SESSION['auth']) {
    clearCart($userID);
}


header('Location: ../index.php');

die;

?>
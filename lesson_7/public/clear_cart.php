<?php

require '../engine/init.php';

require ROOT_DIR.'engine/cart.php';

clearCart();

header('Location: /lesson_7/index.php');

die;

?>
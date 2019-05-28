<?php

require './engine/init.php';

require ROOT_DIR.'templates/header.php';

if ($_SESSION['auth']) {
    require ROOT_DIR.'data/orders.php';
    require ROOT_DIR.'templates/orders.php';
}

require ROOT_DIR.'templates/footer.php';

?>
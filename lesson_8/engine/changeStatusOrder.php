<?php

if (isset($_POST['order']) && isset($_POST['status'])) {
    
    require 'init.php';
    
    $mysqli = myDB_connect();
    
    $queryText = sprintf('UPDATE orders SET status="%s" WHERE id="%u"', $_POST['status'], $_POST['order']);
    
    $query = mysqli_query($mysqli, $queryText);
    
}

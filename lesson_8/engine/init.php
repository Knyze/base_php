<?php

const ROOT_DIR = __DIR__.'/../';

function myDB_connect() {

    $config = require ROOT_DIR.'config/config.php';

    $mysqli = mysqli_connect(
        $config['db_host'],
        $config['db_user'],
        $config['db_pass'],
        $config['db_name']

    );

    return $mysqli;

}

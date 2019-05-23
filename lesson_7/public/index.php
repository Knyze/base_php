<?php

$query = mysqli_query(myDB_connect(), "SELECT * FROM catalog");

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

//var_dump($result);
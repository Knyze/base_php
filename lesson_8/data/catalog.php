<?php

$query = mysqli_query(myDB_connect(), "SELECT * FROM catalog");

$result;

while ($row = mysqli_fetch_assoc($query)) {
    $result[] = $row;
}

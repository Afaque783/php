<?php

/**
 * Get the database connection
 *
 * @return object Connection to the database server
 */
function getDB()
{
    $db_host = "localhost";
    $db_name = "mystore";
    $db_user = "root";
    $db_pass = "1234567890";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }

    return $conn;
}
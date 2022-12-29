<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'id20078300_anna');
define('DB_PASS', 'dXtwtL3+q\l[53Y5');
define('DB_NAME', 'id20078300_php_dev');

//Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Check connection
if ($conn->connect_error) {
    die('Connection Failed' . $conn->connect_error);
}

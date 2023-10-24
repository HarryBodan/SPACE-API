<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);


if($_SERVER["REQUEST_METHOD"] == "GET"){
require_once(__DIR__ . '/../connection.php');
    $my_query = 'select * from achievement';

    require_once( __DIR__ . '/../generical_return.php');

    $result->close();
    $mysql->close();
}

?>
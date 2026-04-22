<?php
$host = "localhost";
$user = "root";
$password = "";
$db_name = "self_shop";

$db_connection = mysqli_connect( $host, $user, $password, $db_name);

if(!$db_connection){
    die("Connection is failed".mysqli_connect_error());
}
?>
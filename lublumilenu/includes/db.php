<?php

$servername = "127.0.0.1";
$user = "ta22s1017_user";
$password = "afai6Ocai0ei";
$database = "ta22s1017_DB";


$connect = new mysqli($servername, $user, $password, $database);

if ($connect->connect_error){
    die("Connection failed: " . $connect->connect_error);
}

$connect->set_charset("utf8");

?>
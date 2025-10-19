<?php

$host = 'localhost';     
$username = 'root';       
$password = '';         
$dbname = 'phpdcmtp';     

$conn = new mysqli($host, $username, $password, $dbname);


if ($conn->connect_error) {
    die("DB connection failed"); 
}

$conn->set_charset("utf8mb4");
?>

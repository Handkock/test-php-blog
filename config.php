<?php
session_start();

define('ROOT_PATH', realpath(dirname(__FILE__)));
define('APP_NAME', 'Check 24 Blog');

//connect to database
global $conn;
$conn =  mysqli_connect('localhost', 'root', 'root', 'blog', 8889) ;
if ($conn->error) {
    die("Connection failed: " . $conn->connect_error);
}
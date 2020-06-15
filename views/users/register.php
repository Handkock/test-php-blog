<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
ob_start();
require_once 'vendor/autoload.php';
ob_end_clean();

use Models\User;
use Models\Post;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/public/css/style.css">

    <link rel="stylesheet" href="/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <title><?= APP_NAME ?></title>
</head>
<body>
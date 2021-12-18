<?php
error_reporting(0);

    $connect = mysqli_connect('http://127.0.0.1/', 'root', '', 'morgen');

    if (!$connect) {
        die('Error connect to DataBase');
    }
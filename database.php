<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'signup_db';
    $conn = new mysqli($host, $username, $password, $database);
    if($conn->connect_error){
        die('Connection error: ' . $conn->connect_error);
    }




?>
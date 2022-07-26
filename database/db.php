<?php

$host     = 'localhost';
$username = 'root';
$password = '';
$dbName   = 'registration_form';

$conn = mysqli_connect($host, $username, $password, $dbName);

if ($conn) {
    // echo 'connected';
} 
// else echo 'failed' . mysqli_error();
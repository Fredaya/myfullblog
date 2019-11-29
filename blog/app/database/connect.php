<?php

$host = 'qwinhappiness.com';
$user = 'qwinhapp';
$pass = 'Fredaya46567631419';
$db_name = 'qwinhapp_poll';

$conn = new MySQLi($host, $user, $pass, $db_name);

if ($conn->connect_error) {
    die('Datebase connection error: '. $conn->connect_error);
}
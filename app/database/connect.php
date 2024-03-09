<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'blogphp';

$conn = new MYSQLi($host, $user, $pass, $db_name);
if ($conn->connect_error){
    die("Connect Error". $conn->connect_error);
}
?>